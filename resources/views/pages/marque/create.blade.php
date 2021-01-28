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
    <form action="{{ route('storeMarque') }}" method="POST" id="createForm">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Marque :</label>
            <div class="col-sm-10">
              <input name="name" type="text" class="form-control" id="name" value="">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success" form="createForm">Créer un élément dans les marques</button>
        </div>
    </form>
</div>
    
@endsection