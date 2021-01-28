@extends('layouts/base', ['title' => 'Stock'])

@section('assets')
    <link rel="stylesheet" href="/assets/css/stock.css" media="screen">
    <link rel="stylesheet" href="/assets/css/create.css" media="screen">
@endsection

@section('content')
<div class="container">
    <form action="{{ route('storeStock') }}" method="POST" id="createForm">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Dimension :</label>
            <div class="col-sm-10">
              <input name="name" type="text" class="form-control" id="name" value="">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Marque :</label>
            <div class="col-sm-10">
                <select name="id_marque" id="marque-select" form="createForm">
                    <option value=""></option>
                    @foreach ($marque as $itemMarque)
                        <option value="{{ $itemMarque->id }}">{{ $itemMarque->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="nb" class="col-sm-2 col-form-label">En stock :</label>
            <div class="col-sm-10">
              <input name="nb" type="text" class="form-control" id="nb" value="">
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Prix :</label>
            <div class="col-sm-10">
              <input name="price" type="text" class="form-control" id="price" value="">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success">Créer un élément dans le stock</button>
        </div>
    </form>
</div>
    
@endsection