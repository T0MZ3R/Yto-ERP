@extends('layouts/base', ['title' => 'Stock'])

@section('assets')

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
    </style>
@endsection

@section('content')
<div class="container">
    <form action="{{ route('storeClient') }}" method="POST" id="createForm">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Client :</label>
            <div class="col-sm-10">
              <input name="name" type="text" class="form-control" id="name" value="">
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">Adresses :</label>
            <div class="col-sm-10">
              <input name="address" type="text" class="form-control" id="address" value="">
            </div>
        </div>
        <div class="form-group row">
            <label for="mail" class="col-sm-2 col-form-label">Mail :</label>
            <div class="col-sm-10">
              <input name="mail" type="text" class="form-control" id="mail" value="">
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">Telephone :</label>
            <div class="col-sm-10">
              <input name="phone" type="text" class="form-control" id="phone" value="">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success" form="createForm">Créer un client</button>
        </div>
    </form>
</div>
    
@endsection