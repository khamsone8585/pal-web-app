<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TagController extends Controller
{
    public function AllTag(){
        $tags = Tag::latest()->paginate(5);
        return view('admin.tag.index',compact('tags'));
    }
    public function StoreTag(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|unique:tags|min:3',
        ],
        [
            'brand_name.required' => 'ກະລຸນາປ້ອນຂໍ້ມູນກ່ອນ!!',
        ]
        );
        Tag::insert([
            'name' => $request->name,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Tag Inserted Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function Edit($id){
        $tags = Tag::find($id);
        return view('admin.tag.edit',compact('tags'));
    }
    public function Update(Request $request, $id){
        $validatedData = $request->validate([
            'name' => 'required|unique:tags|min:3',
        ],
        [
            'brand_name.required' => 'ກະລຸນາປ້ອນຂໍ້ມູນກ່ອນ!!',
        ]
        );
        $update = Tag::find($id)->update([
            'name' => $request->name
        ]);

        $notification = array(
            'message' => 'Tag Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.tag')->with($notification);
    }
}
