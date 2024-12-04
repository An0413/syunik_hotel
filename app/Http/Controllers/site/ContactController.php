<?php

namespace App\Http\Controllers\site;

use App\Http\Requests\Site\ContactRequest;
use App\Models\Contact;
use http\Env\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController
{
    public function contact()
    {
        $contact = Contact::first();
        $active = 'contact';
        return view('site.contact', compact('contact','active'));
    }

    public function contact_message(ContactRequest $request)
    {
        $data = $request->validated();
        $data["user_name"] = $request->user_name;
        $data["user_email"] = $request->user_email;
        $data["user_message"] = $request->user_message;
        $data["status"] = 1;

        $result = DB::table('messages_to_admin')->insert([
            'name' => $data["user_name"], 'email' => $data["user_email"], 'message' => $data["user_message"],
            'status' => $data["status"]
        ]);

        if ($result) {
            return redirect()->back()->with('success', 'Ձեր հաղորդագրությունը հաջողությամբ ուղարկվել է !');
        } else{
            return redirect()->back()->with('errors', 'Ձեր հաղորդագրությունը չի ուղարկվել !');
        }

    }
}
