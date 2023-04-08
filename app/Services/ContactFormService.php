<?php

namespace App\Services;

use App\Models\ContactForm;

class ContactFormService
{
    public function store(array $data): void
    {
        $contact = new ContactForm();
        $contact->fill($data);
        $contact->save();
    }
}
