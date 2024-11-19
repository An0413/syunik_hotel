<?php

namespace App\Http\Controllers\site;

use App\Models\Contact;

class ContactController
{
    public function contact(){
        $contact = Contact::all();
        return view('site.contact', compact('contact'));
    }
}
