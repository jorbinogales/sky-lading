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
            'nombre'      => '',
            'email'     => '',
            'telefono'     => '',
            'rif'       => '',
            'ciudad'      => '',
            'estado'     => '',
        ]);

        // dd($request);

        Contact::create([
            'name' => $data['nombre'],
            'email' => $data['email'],
            'phone' => $data['telefono'],
            'rif' => $data['rif'],
            'state' => $data['estado'],
            'city' => $data['ciudad']
        ]);

        return response()->json($data, 201);
    }
}
