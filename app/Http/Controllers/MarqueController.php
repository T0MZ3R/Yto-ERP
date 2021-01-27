<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marque;

class MarqueController extends Controller
{
    //
    public function indexMarque(){
        $marque = Marque::all();
        return view('pages/marque/index', compact('marque'));
    }

    public function createMarque(){
        $marque = Marque::all();
        return view('pages/marque/create', compact('marque'));
    }

    public function storeMarque(Request $request){
        $itemStock = Marque::create([
            'name' => $request->input('name'),
        ]);
        return redirect()->route('indexMarque');
    }

    public function editMarque($id){
        $marque = Marque::find($id);
        return view('pages/marque/edit', compact('marque'));
    }

    public function updateMarque($id, Request $request){
        $marque = Marque::find($id);
        $marque->name = $request->input('name');
        $marque->save();
        return redirect()->route('indexMarque');
    }

    public function deleteMarque($id){
        Marque::find($id)->forceDelete();
        return redirect()->route('indexMarque');
    }
}
