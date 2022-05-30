<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendNewMail;

class ContactController extends Controller
{
    // ! questo è una specia di create
    public function contact(){
        return view('guests.contact');
    }

    // ! questo è una specia di store
    public function contactMailSender(Request $request){
        //dd($request->all());
        $data = $request->all();
        //dd($data);
        Mail::to('mailAdmin@admin.com')->send(new SendNewMail($data['name'], $data['email'], $data['message']));

        return redirect()->route('guest.thanks');
    }

    public function thanks(){
        return view('guests.thanks');
    }
}
