<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function showForm()
    {
        return view('emails.form');
    }

    public function sendMail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'message' => 'required|string',
            'attachment' => 'nullable|file|max:2048',
            'company_logo' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048'
        ]);

        $messageContent = $request->message;
        $attachment = $request->file('attachment');

        // Logo
        $logoPath = $request->hasFile('company_logo') ? $request->file('company_logo')->getRealPath() : public_path('images/company_logo.png');

        Mail::to($request->email)->send(new \App\Mail\TestMail($messageContent, $attachment, $logoPath));

        return back()->with('success', 'Email envoyé avec succès.');
    }

}
