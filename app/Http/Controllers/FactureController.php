<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facture;
use App\Models\Stock;
use App\Models\Client;
use App\Models\Marque;
use Illuminate\Support\Facades\Session as Session;

class FactureController extends Controller
{
    //
    public function indexFacture(){
        $facture = Facture::all();
        $stock = Stock::all();
        $client = Client::all();
        $marque = Marque::all();
        return view('pages/facture/index', compact('facture', 'stock', 'client', 'marque'));
    }

    public function createFacture(){
        if(null !== session('stockToFacture')){
            $stock = Stock::find(session('stockToFacture'));
        }else{
            return redirect()->route('indexStock');
        }

        if(null !== session('clientToFacture')){
            $client = Client::find(session('clientToFacture'));
        }else{
            return redirect()->route('indexClient');
        }

        return view('pages/facture/create',compact('client','stock'));
    }

    public function storeFacture(Request $request){
        Facture::create([
            'id_client' => session('clientToFacture'),
            'id_stock' => session('stockToFacture'),
            'nb' => $request->input('nb'),
            'price' => $request->input('price'),
        ]);
        Session::forget('clientToFacture');
        Session::forget('stockToFacture');
        return redirect()->route('indexFacture');
    }

    public function storeStockInSession(Request $request){
        session(['stockToFacture' => $request->id]);
        return redirect()->route('createFacture');
    }

    public function storeClientInSession(Request $request){
        session(['clientToFacture' => $request->id]);
        return redirect()->route('createFacture');
    }
}


// TODO : Facture controller
