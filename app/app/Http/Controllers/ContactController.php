<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
        $contact = new Contact;
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
        $contact->save();
        return redirect()->route('home')->with('success', 'Contact form was added!');
    }

    public function updateMassageSubmit($id, ContactRequest $req)
    {
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');
        $contact->save();
        return redirect()->route('contact-data-one', $id)->with('success', 'Contact form was updated!');
    }

    public function allData()
    {
        return view('messages', [
            'data' => Contact::all(),
        ]);
    }

    public function showOneMassage($id)
    {
        return view('one-message', [
            'data' => Contact::find($id),
        ]);
    }

    public function updateMassage($id)
    {
        return view('update-message', [
            'data' => Contact::find($id),
        ]);
    }

    public function deleteMassage($id)
    {
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Contact form was deleted!');
    }
}
