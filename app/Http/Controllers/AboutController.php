<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeAbout;
use Illuminate\Support\Carbon;

class AboutController extends Controller
{
    public function HomeAbout(){

        $homeabout = HomeAbout::latest()->get();
        return view('admin.home.index',compact('homeabout'));
    }

    public function AddAbout(){
        return view('admin.home.create');
    }

    public function StoreAbout(Request $request){

        HomeAbout::insert([
            'content' => $request->content,
            'vision' => $request->vision,
            'mission' => $request->mission,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('home.about')->with('success', 'About Inserted Successfully');
    }
    public function EditAbout($id){
        $homeabout = HomeAbout::find($id);
        return view('admin.home.edit',compact('homeabout'));
    }

    public function UpdateAbout(Request $request, $id){
        $update = HomeAbout::find($id)->update([
            'content' => $request->content,
            'vision' => $request->vision,
            'mission' => $request->mission,
        ]);

        return redirect()->route('home.about')->with('success', 'About Updated Successfully');
    }
    
    public function DeleteAbout($id){
        $delete = HomeAbout::find($id)->Delete();
        return redirect()->back()->with('success', 'About Deleted Successfully');
    }
}
