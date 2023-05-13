<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\AdminEmailMessage;
use Illuminate\Http\Request;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function create(){
        return view('admin.email.create');
    }

    public function store(Request $request){
        $request->validate([
            'email' => ['required', 'email'],
            'subject' => ['required'],
            'content' => ['required'],
        ]);

        Mail::to($request->email)
        ->send(new AdminEmailMessage($request->subject, $request->content));

        return back()->banner("Email sent to {$request->email}");
    }
}
