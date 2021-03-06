<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Marque;

class StockController extends Controller
{
    //
    public function indexStock(){
        $marque = Marque::all();
        $stock = Stock::all();
        return view('pages/stock/index', compact('stock','marque'));
    }

    public function createStock(){
        $marque = Marque::all();
        return view('pages/stock/create', compact('marque'));
    }

    public function storeStock(Request $request){
        $itemStock = Stock::create([
            'name' => $request->input('name'),
            'id_marque' => $request->input('id_marque'),
            'nb' => $request->input('nb'),
            'price' => $request->input('price'),
        ]);
        return redirect()->route('indexStock');
    }

    public function editStock($id){
        $item = Stock::find($id);
        $marque = Marque::all();
        return view('pages/stock/edit', compact('item','marque'));
    }

    public function updateStock($id, Request $request){
        $item = Stock::find($id);
        $item->name = $request->input('name');
        $item->id_marque = $request->input('id_marque');
        $item->nb = $request->input('nb');
        $item->price = $request->input('price');
        $item->save();
        return redirect()->route('indexStock');
    }

    public function deleteStock($id){
        Stock::find($id)->forceDelete();
        return redirect()->route('indexStock');
    }
}
