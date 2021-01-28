@extends('layouts/base', ['title' => 'Stock'])

@section('assets')
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="/assets/js/add-to-facture.js"></script>    
    
    <link rel="stylesheet" href="/assets/css/stock.css" media="screen">
    <style>
        #createForm{
            margin: 25vh auto 0 auto;
            width:54%;
            padding: 40px;
            background-color: #EEEEF3;
            border-radius: 5px;
            /* border: 1px solid black; */
        }

        #createForm select{
            margin-top: 1.4%;
        }

        #createForm button{
            margin-top: 20px;
            width: 50%;
        }

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
              <input name="nb" type="text" class="form-control" id="nb" value="">
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Prix unité :</label>
            <div class="col-sm-10">
              <input name="price" type="text" class="form-control" id="price" value="">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success" form="createForm">Créer une facture</button>
        </div>
    </form>
</div>
@endsection