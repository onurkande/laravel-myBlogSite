<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    function store(Request $request)
    {
        //dd($request->all());
        // Mail::to('kandemiro972@gmail.com')->send(new ContactMail($request));
        // return redirect('contact')->with('store', "Mesaj gönderildi");

        $request->validate([
            "email"=> "required|email",
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        Mail::to('kandemiro972@gmail.com')->send(new ContactMail($data));
        return redirect('contact')->with('store', "Mesaj gönderildi");
    }
}
