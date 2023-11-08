<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppController extends Controller
{
    public function sendMail(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'subject'   => 'required',
            'body'      => 'required'
        ]);

        Mail::to("kunozgamlowoka@gmail.com")->send(new ContactFormMail());
    }
}
