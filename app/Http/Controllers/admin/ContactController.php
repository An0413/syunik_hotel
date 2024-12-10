<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Contact\UpdateRequest;
use App\Models\Contact;
use App\Models\Services;
use http\Env\Request;
use Illuminate\Support\Facades\File;


class ContactController extends Controller
{
    public function show()
    {
        $contact = Contact::all();
        return view('admin.contact.show', compact('contact'));
    }

    public function edit($id)
    {
        $contact = Contact::where('id', $id)->first();
        return view('admin.contact.edit', compact('contact'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $contact = Contact::find($id);
        $data = $request->validated();
        $up_data = $data;

        Contact::where('id', $id)->update($up_data);

        return redirect()->route('contact_show');
    }


}
