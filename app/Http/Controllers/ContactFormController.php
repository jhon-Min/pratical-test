<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;
use App\Models\ContactForm;

class ContactFormController extends Controller
{
    public function send(SendRequest $request)
    {
        $validatedData = $request->validated();

        // Create a new Contact model instance and fill it with the validated data
        $contact = new ContactForm();
        $contact->fill($validatedData);
        $contact->save();

        return redirect()->back()->with('success', 'Send successfully!');
    }

    public function contactForm()
    {
        return view('contact.send');
    }
}
