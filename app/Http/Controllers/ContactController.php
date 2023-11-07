<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function store(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->input('name'); 
        $contact->email = $request->input('email'); 
        $contact->message = $request->input('message'); 

        $contact->save();
        return redirect('dashboard/dynamic-edit/contact')->with('store', "Mesaj gönderildi");
    }
}
