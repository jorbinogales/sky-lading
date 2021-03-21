<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ClientMail;
use App\Mail\ProviderMail;
use App\Contact;
use Mail;

class ContactController extends Controller
{
    public function index()
    {
        // Se ordenan desde el mas nuevo
        $contacts = Contact::orderBy('created_at', 'DESC')->get();
        return view('backend.contacts.index', compact('contacts'));
    }
    public function store(Request $request)
    {
        // Se validan los datos que envia el cliente

        $data = $request->validate([
            'name'      => 'required|string',
            'email'     => 'required|email|string|unique:contacts,email',
            'phone'     => 'required|min:5',
            'city'      => 'required|min:5'
        ]);

        // Correo para el cliente

        $to_name    = $data['name'];
        $to_email   = $data['email'];
        $emailData  = $data;

        
        Mail::to($to_email)->send(new ClientMail($data));
        // try {
        // } catch (\Throwable $th) {
        //     dd($th);
        // }
        
        // // Correo para mily
        
        // $to_name    = $data['name'];
        // $to_email   = 'mili.paris@inter.com.ve';
        // $emailData  = $data;
        
        // try {
        //     Mail::to($to_email)->send(new ProviderMail($data));
        // } catch (\Throwable $th) {
        //     return view('contacts.failure');
        // }

        // // Correo para tconecta
        
        // $to_name    = $data['name'];
        // $to_email   = 'Tconectainalambrico@gmail.com';
        // $emailData  = $data;
        
        // try {
        //     Mail::to($to_email)->send(new ProviderMail($data));
        // } catch (\Throwable $th) {
        //     return view('contacts.failure');
        // }

        // Finalmente, si no surje ningun error, se guarda todo en la base de datos
        // Contact::create($data);
    
        // return view('contacts.success');
    }
}