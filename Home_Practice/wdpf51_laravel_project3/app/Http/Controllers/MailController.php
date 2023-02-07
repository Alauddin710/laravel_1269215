<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Exam is n 27 February',
            'body' => 'This is for testing email using smtp.'
        ];

        Mail::to('fayzullahaman@gmail.com')->send(new DemoMail($mailData));

        dd("Email is sent successfully.");
    }

    public function contactForm()
    {

        // Mail::to('fayzullahaman@gmail.com')->send(new DemoMail());

        // dd("Email is sent successfully.");

        return view('contact');
    }

    public function MessageSend(Request $request)
    {
        $mailData = [
            'senderEmail' => $request->sender_email,
            'senderName' => $request->sender_name,
            'message' => $request->message,
        ];

        Mail::to('fayzullahaman@gmail.com')->send(new DemoMail($mailData));
        dd("Email is sent successfully.");
    }
}
