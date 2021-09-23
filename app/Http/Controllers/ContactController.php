<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
// use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function show()
    {
        return view('contact');
    }

    public function store()
    {
        request()->validate(['email' => 'required|email']);

        Mail::to(request('email'))
            ->send(new Contact('shirts'));

        return redirect('/contact')
            ->with('message', 'Email Sent!');
       
    }
}
