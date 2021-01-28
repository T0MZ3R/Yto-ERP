@extends('layouts/base', ['title' => 'Stock'])

@section('assets')
    <link rel="stylesheet" href="/assets/css/stock.css" media="screen">
    <style>
        #editForm{
            margin: 25vh auto 0 auto;
            width:54%;
            padding: 40px;
            background-color: #EEEEF3;
            border-radius: 5px;
            /* border: 1px solid black; */
        }

        #editForm select{
            margin-top: 1.4%;
        }

        #editForm button{
            margin-top: 20px;
            width: 50%;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <form action="{{ route('updateMarque', $marque->id) }}" method="POST" id="editForm">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Marque :</label>
            <div class="col-sm-10">
              <input name="name" type="text" class="form-control" id="name" value="{{ $marque->name }}">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success" form="editForm">Editer</button>
            <button type="submit" class="btn btn-danger" form="deleteForm">Supprimer</button>
        </div>
    </form>
    
</div>
<form action="{{ route('deleteMarque', $marque->id) }}" method="post" id="deleteForm">
    @csrf
    @method('DELETE')
</form>
@endsection