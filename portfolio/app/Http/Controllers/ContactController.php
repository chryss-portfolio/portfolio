<?php

namespace App\Http\Controllers;

use App\Mail\MailToInquirer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    // Display the contact form
    public function show()
    {
        return view('contact');
    }

    // Handle form submission
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Send an email (optional)
        // You can set up mail sending using Laravel's Mail functionality
        Mail::to('czedd23@gmail.com')->send(new ContactMail($validatedData));
        Mail::to($validatedData['email'])->send(new MailToInquirer($validatedData));

        // Redirect back with a success message
        return redirect()->route('contact')->with('success', 'Your message has been sent!');
    }
}
