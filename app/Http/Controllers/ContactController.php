<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\ContactMail;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
   
    public function sendEmail(Request $request)
    {
        $details = [
           'name'=>$request->name,
           'email'=>$request->email,
           'phone'=>$request->phone,
           'message'=>$request->message
        ];

        Mail::to('it.bhlab@bhinvest.net ')->send(new ContactMail($details));
    
       return back()->with('message_sent','Votre message a été envoyer');    
    }

}
