@extends('layouts/base', ['title' => 'Stock'])

@section('assets')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    
    
    
    
    <link rel="stylesheet" href="assets/css/stock.css" media="screen">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <style>
        form{
            margin: 50px auto 0 auto;
            padding: 10px;
            border: 1px solid black;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <form action="{{ route('storeStock') }}" method="POST" id="editForm" style="width:50%;">
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
                <select name="id_marque" id="marque-select" form="editForm">
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
        <input type="submit">
    </form>
</div>
    
@endsection