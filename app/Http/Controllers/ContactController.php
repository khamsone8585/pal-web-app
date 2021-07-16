<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ContactForm;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    public function AdminContact(){
        $contacts = Contact::all();
        return view('admin.contact.index',compact('contacts'));
    }
    public function AdminAddContact(){
        return view('admin.contact.create');
    }
    public function AdminStoreContact(Request $request){
        Contact::insert([
            'address' => $request->content,
            'email' => $request->vision,
            'phone' => $request->mission,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('admin.contact')->with('success', 'Contact inserted Successfully');
    }

    public function AdminMessage(){
        $message = ContactForm::all();
        return view('admin.contact.message',compact('message'));
    }

    public function ContactForm(Request $request){
        ContactForm::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now()
        ]);
        return redirect()->back()->with('success', 'Your Message Send Successfully');

    }
}
