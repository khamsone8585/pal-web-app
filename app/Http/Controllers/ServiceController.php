<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;


class ServiceController extends Controller
{
    public function AllService(){
        $services = Service::all();
        return view('admin.service.index',compact('services'));
    }
    public function StoreService(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|unique:services|min:4',
            'content' => 'required|unique:services|min:4',
            'logo' => 'required|mimes:jpg,jpeg,png',
        ],
        [
            'title.required' => 'ກະລຸນາປ້ອນຂໍ້ມູນກ່ອນ!!',
            'content.required' => 'ກະລຸນາປ້ອນຂໍ້ມູນກ່ອນ!!',
            'logo.min' => 'ຊື່ປະເພດຍາວກວ່າ 4 ຕົວອັກສອນ!!',
        ]
        );

        $service_logo = $request->file('logo');

        $name_gen = hexdec(uniqid()).'.'.$service_logo->getClientOriginalExtension();
        Image::make($service_logo)->resize(300,200)->save('image/service/'.$name_gen);

        $last_img = 'image/service/'.$name_gen;

        Service::insert([
            'title' => $request->title,
            'content' => $request->content,
            'logo' => $last_img,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Services Inserted Successfully',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }
    public function Edit($id){
        $services = Service::find($id);
        return view('admin.service.edit',compact('services'));
    }
    public function Update(Request $request, $id){
        $validatedData = $request->validate([
            'title' => 'required|unique:services|min:4',
            'content' => 'required|unique:services|min:4',
            'logo' => 'required|mimes:jpg,jpeg,png',
        ],
        [
            'title.required' => 'ກະລຸນາປ້ອນຂໍ້ມູນກ່ອນ!!',
            'content.required' => 'ກະລຸນາປ້ອນຂໍ້ມູນກ່ອນ!!',
            'logo.min' => 'ຊື່ປະເພດຍາວກວ່າ 4 ຕົວອັກສອນ!!',
        ]
        );

        $old_image = $request->old_image;

        $service_logo = $request->file('logo');

        if($service_logo){
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($service_logo->getClientOriginalExtension());
            $img_name = $name_gen. '.' .$img_ext;
            $up_location = 'image/service/';
            $last_img = $up_location.$img_name;
            $service_logo->move($up_location,$img_name);

            unlink($old_image);
            Service::find($id)->update([
                'title' => $request->title,
                'content' => $request->content,
                'logo' => $last_img,
                'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Brand Updated Successfully',
                'alert-type' => 'info'
            );

            return Redirect()->back()->with($notification);
        }else{
            Service::find($id)->update([
                'title' => $request->title,
                'content' => $request->content,
                'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Service Updated Successfully',
                'alert-type' => 'warning'
            );

            return Redirect()->back()->with($notification);
        }
    }
    public function Delete(){
        $image = Service::find($id);
        $old_image = $image->brand_image;
        unlink($old_image);
        Service::find($id)->delete();

        $notification = array(
            'message' => 'Service Deleted Successfully',
            'alert-type' => 'error'
        );
        return Redirect()->back()->with($notification);
    }
}
