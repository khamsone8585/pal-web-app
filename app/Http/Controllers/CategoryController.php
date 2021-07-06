<?php

namespace App\Http\Controllers;


use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;



class CategoryController extends Controller
{
    public function AllCat(){
        // $allCate = DB::table('categories')
        //             ->join('users','categories.user_id','users.id')
        //             ->select('categories.*','users.name')
        //             ->latest()->paginate(5);

        $allCate = Category::latest()->paginate(5);
        $trashCat = Category::onlyTrashed()->latest()->paginate(3);

        return view('admin.category.index', compact('allCate','trashCat'));
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

    //Query Builder
    $data = array();
    $data['category_name'] = $request->category_name;
    $data['user_id'] = Auth::user()->id;
    DB::table('categories')->insert($data);

    return Redirect()->back()->with('success','ເພີ່ມຂໍ້ມູນສຳເລັດ!!');

    }

    public function EditCat($id){
        // ORM
        // $allCate = Category::find($id);

        //QB
        $allCate = DB::table('categories')->where('id',$id)->first();
        return view('admin.category.edit',compact('allCate'));
    }
    public function UpdateCat(Request $request ,$id){
        // $update = Category::find($id)->update([
        //     'category_name' => $request->category_name,
        //     'user_id' => Auth::user()->id
        // ]);

        $data = array();
        $data['category_name'] = $request->category_name;
        $data['user_id'] = Auth::user()->id;
        DB::table('categories')->where('id',$id)->update($data);

        return Redirect()->route('all.category')->with('success','ເເກ້ໄຂຂໍ້ມູນສຳເລັດ!!');
    }

    public function SoftDelete($id){
        $delete = Category::find($id)->delete();
        return Redirect()->back()->with('success', 'ລົບປະເພດຜູ້ໃຊ້ສຳເລັດ');
    }

    public function Restore($id){
        $delete = Category::withTrashed()->find($id)->restore();
        return Redirect()->back()->with('success', 'ກູ້ຂໍ້ມູນປະເພດຜູ້ໃຊ້ສຳເລັດ');
    }

    public function Pdelete($id){
        $delete = Category::onlyTrashed()->find($id)->forceDelete();
        return Redirect()->back()->with('success', 'ລົບຂໍ້ມູນຖາວອນປະເພດຜູ້ໃຊ້ສຳເລັດ');
    }
}
