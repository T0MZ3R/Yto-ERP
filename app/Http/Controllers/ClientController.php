<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    //
    public function indexClient(){
        $client = Client::all();
        return view('pages/client/index', compact('client'));
    }

    public function createClient(){
        $client = Client::all();
        return view('pages/client/create', compact('client'));
    }

    public function storeClient(Request $request){
        Client::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'mail' => $request->input('mail'),
            'phone' => $request->input('phone'),
        ]);
        return redirect()->route('indexClient');
    }

    public function editClient($id){
        $client = Client::find($id);
        return view('pages/client/edit', compact('client'));
    }

    public function updateClient($id, Request $request){
        $client = Client::find($id);
        $client->name = $request->input('name');
        $client->address = $request->input('address');
        $client->mail = $request->input('mail');
        $client->phone = $request->input('phone');
        $client->save();
        return redirect()->route('indexClient');
    }

    public function deleteClient($id){
        Client::find($id)->forceDelete();
        return redirect()->route('indexClient');
    }
}
