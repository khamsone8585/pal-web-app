<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChangePass;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $brands = DB::table('brands')->get();
    $abouts = DB::table('home_abouts')->first();
    return view('home',compact('brands','abouts'));
});
//Verifition_Email
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

//Category Controller
Route::get('category/all',[CategoryController::class,'AllCat'])->name('all.category');
Route::post('category/add',[CategoryController::class,'AddCat'])->name('store.category');

Route::get('category/edit/{id}',[CategoryController::class,'EditCat']);
Route::post('category/update/{id}',[CategoryController::class,'UpdateCat']);
Route::get('softdelete/category/{id}',[CategoryController::class,'SoftDelete']);
Route::get('category/restore/{id}',[CategoryController::class,'Restore']);
Route::get('pdelete/category/{id}',[CategoryController::class,'Pdelete']);


//Brand
Route::get('brand/all',[BrandController::class,'AllBrand'])->name('all.brand');
Route::post('brand/add',[BrandController::class,'StoreBrand'])->name('store.brand');

Route::get('brand/edit/{id}',[BrandController::class,'Edit']);
Route::post('brand/update/{id}',[BrandController::class,'Update']);
Route::get('brand/delete/{id}',[BrandController::class,'Delete']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    // $users = DB::table('users')->get();
    return view('admin.index');
})->name('dashboard');

Route::get('user/logout',[BrandController::class,'Logout'])->name('user.logout');

//Admin All Route
Route::get('home/slider',[HomeController::class,'HomeSlider'])->name('home.slider');
Route::get('add/slider',[HomeController::class,'AddSlider'])->name('add.slider');
Route::post('store/slider',[HomeController::class,'StoreSlider'])->name('store.slider');


//Home_About all Route
Route::get('home/about',[AboutController::class,'HomeAbout'])->name('home.about');
//Route::get('add/about',[AboutController::class,'AddAbout'])->name('add.about');
//Route::post('store/about',[AboutController::class,'StoreAbout'])->name('store.about');
Route::get('about/edit/{id}',[AboutController::class,'EditAbout']);
Route::post('update/homeabout/{id}',[AboutController::class,'UpdateAbout']);
// Route::get('about/delete/{id}',[AboutController::class,'DeleteAbout']);

//Admin Contact Page Route
Route::get('admin/contact',[ContactController::class,'AdminContact'])->name('admin.contact');
Route::get('admin/message',[ContactController::class,'AdminMessage'])->name('admin.message');
Route::get('admin/add/contact',[ContactController::class,'AdminAddContact'])->name('add.contact');
Route::post('admin/store/contact',[ContactController::class,'AdminStoreContact'])->name('store.contact');

//Contact Form
Route::get('contact',[ContactController::class,'Contact'])->name('contact');
Route::post('contact/form',[ContactController::class,'ContactForm'])->name('contact.form');

//Change Password
Route::get('user/password',[ChangePass::class,'CPassword'])->name('change.password');
