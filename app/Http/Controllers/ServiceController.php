<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function AllService(){
        $services = Service::all();
        return view('admin.service.index',compact('services'));
    }
    // public function StoreService(){
        
    // }
    // public function EditService(){
        
    // }
    // public function UpdateService(){
        
    // }
    // public function DeleteService(){
        
    // }
}
