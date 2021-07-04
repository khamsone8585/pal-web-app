<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function AllCat(){
        return view('admin.category.index');
    }

    public function AddCat(Request $request){
        $validatedData = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ],
        [
            'category_name.required' => 'ກະລຸນາປ້ອນຂໍ້ມູນກ່ອນ!!',
            'category_name.max' => 'ຊື່ປະເພດໜ້ອຍກວ່າ 255 ຕົວອັກສອນ!!',
        ]
    );

    Category::insert([
        'category_name' => $request->category_name,
        'user_id' => Auth::user()->id,
        'created_at' => Carbon::now()
    ]);
    return Redirect()->back()->with('success','ເພີ່ມຂໍ້ມູນສຳເລັດ!!');

    }
}
