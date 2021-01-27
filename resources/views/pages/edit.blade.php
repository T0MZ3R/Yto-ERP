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
    <form action="{{ route('updateStock', $item->id) }}" method="POST" id="editForm" style="width:50%;">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Dimension :</label>
            <div class="col-sm-10">
              <input name="name" type="text" class="form-control" id="name" value="{{ $item->name }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Marque :</label>
            <div class="col-sm-10">
                <select name="id_marque" id="marque-select" form="editForm">
                    <option value="{{ $item->id_marque }}">{{ $marque[$item->id_marque-1]->name }}</option>
                    @foreach ($marque as $itemMarque)
                        @if ($itemMarque->id != $item->id_marque)
                            <option value="{{ $itemMarque->id }}">{{ $itemMarque->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="nb" class="col-sm-2 col-form-label">En stock :</label>
            <div class="col-sm-10">
              <input name="nb" type="text" class="form-control" id="nb" value="{{ $item->nb }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Prix :</label>
            <div class="col-sm-10">
              <input name="price" type="text" class="form-control" id="price" value="{{ $item->price }}">
            </div>
        </div>
        <input type="submit">
        <form action="{{ route('deleteStock', $item->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" type="submit" class="btn btn-dange">Supprimer</button>
        </form>
    </form>
</div>
    
@endsection