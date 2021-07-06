<?php

use App\Http\Controllers\CategoryController;
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
    return view('welcome');
});


//Category Controller
Route::get('category/all',[CategoryController::class,'AllCat'])->name('all.category');
Route::post('category/add',[CategoryController::class,'AddCat'])->name('store.category');

Route::get('category/edit/{id}',[CategoryController::class,'EditCat']);
Route::post('category/update/{id}',[CategoryController::class,'UpdateCat']);

Route::get('softdelete/category/{id}',[CategoryController::class,'SoftDelete']);
Route::get('category/restore/{id}',[CategoryController::class,'Restore']);
Route::get('pdelete/category/{id}',[CategoryController::class,'Pdelete']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    $users = DB::table('users')->get();
    return view('dashboard', compact('users'));
})->name('dashboard');
