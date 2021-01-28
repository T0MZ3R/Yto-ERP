@extends('layouts/base', ['title' => 'Stock'])

@section('assets')
    <script src="/assets/js/add-to-facture.js"></script>    
    <link rel="stylesheet" href="/assets/css/stock.css" media="screen">
    <link rel="stylesheet" href="/assets/css/create.css" media="screen">
    <style>
        #createForm p{
            background-color: white;
            margin: 0;
            border: 1px solid #c7c6c6;
            border-radius: 3px;
            padding: 6px 6px 6px 12px;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <form action="{{ route('storeFacture') }}" method="POST" id="createForm">
        @csrf
        <div class="form-group row">
            <label for="id_client" class="col-sm-2 col-form-label">Client :</label>
            <div class="col-sm-10">
              <p>{{ $client->name }}</p>
            </div>
        </div>
        <div class="form-group row">
            <label for="id_stock" class="col-sm-2 col-form-label">Stock :</label>
            <div class="col-sm-10">
              <p>{{ $stock->name }}</p>
            </div>
        </div>
        <div class="form-group row">
            <label for="nb" class="col-sm-2 col-form-label">Nombre :</label>
            <div class="col-sm-10">
              <input name="nb" type="text" class="form-control" id="nb" placeholder="{{ $stock->nb }}" value="">
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Prix unité :</label>
            <div class="col-sm-10">
              <input name="price" type="text" class="form-control" id="price" placeholder="{{ $stock->price }}" value="">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success" form="createForm">Créer une facture</button>
        </div>
    </form>
</div>
@endsection