<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

use Session;

class ContactController extends Controller
{
    //
    public function store(Request $request){
        $data = $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'phonenumber' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = new contact;
        $contact->fullname = $request->fullname;
        $contact->email = $request->email;
        $contact->phonenumber = $request->phonenumber;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        //$contact = Contact::create($data);

        //Session::put('submitted',true);

        return back()->with('success','Message inserted successfully.');
    }
}
