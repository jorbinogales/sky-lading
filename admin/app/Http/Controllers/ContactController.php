<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ClientMail;
use App\Mail\ProviderMail;
use App\Contact;
use Mail;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $contacts = Contact::all();

        return view('backend.contacts.index', compact('contacts'));
    }
    public function store(Request $request)
    {

        $data = $request->validate([
            'name'      => '',
            'email'     => '',
            'phone'     => '',
            'rif'     => '',
            'city'      => '',
            'state'      => '',
        ]);


        Contact::create($data);

        return response()->json($data, 201);
    }
}
