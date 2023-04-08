<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SendRequest;
use App\Mail\SendMail;
use App\Models\ControlFormInput;
use App\Services\ContactFormService;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    protected $contactFormService;

    public function __construct(ContactFormService $contactFormService)
    {
        $this->contactFormService = $contactFormService;
    }

    public function send(SendRequest $request)
    {
        $validatedData = $request->validated();

        try {
            Mail::to($validatedData['email'])->send(new SendMail($validatedData));
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Please fill valid email');
        }

        $this->contactFormService->store($validatedData);

        return redirect()->back()->with('success', 'Send successfully!');
    }

    public function contactForm()
    {
        $lists = ControlFormInput::get()[0];
        return view('contact.send', compact('lists'));
    }
}
