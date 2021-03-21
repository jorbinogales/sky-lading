<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Illuminate\Validation\Rule;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('created_at', 'DESC')->get();
        return view('backend.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'user'          => 'required|min:3|unique:clients,user',
            'name'          => '',
            'contact_date'  => '',
            'phone'         => '',
            'city'          => '',
            'email'         => '',
            'lead'          => '',
            'status'        => 'array',
            'comment'       => ''
         ]);
        
        $data['status'] = implode(', ', $data['status']);
        
        Client::create($data);

        return redirect()->route('clients.index')->withSuccess('Registrado Exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('backend.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $data = $request->validate([
            'user'          => ['required', Rule::unique('clients')->ignore($client->id)],
            'name'          => '',
            'contact_date'  => '',
            'phone'         => '',
            'city'          => '',
            'email'         => '',
            'lead'          => '',
            'status'        => 'array',
            'comment'       => ''
         ]);
        
        $data['status'] = implode(', ', $data['status']);

        $client->update($data);

        return redirect()->route('clients.index')->withSuccess('Registrado Exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        
        $client->delete();
        return back()->withSuccess('Borrado exitoso');

    }
}
