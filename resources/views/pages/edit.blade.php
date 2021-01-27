@extends('layouts/base', ['title' => 'Stock'])

@section('assets')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/stock.css" media="screen">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <style>
        #editForm{
            margin: 25vh auto 0 auto;
            padding: 10px;
            /* border: 1px solid black; */
        }

        #editForm select{
            margin-top: 1.3%;
        }

        #editForm button{
            margin-top: 20px;
            width: 50%;
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
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success" form="editForm">Success</button>
            <button type="submit" class="btn btn-danger" form="deleteForm">Supprimer</button>
        </div>
    </form>
    
</div>
<form action="{{ route('deleteStock', $item->id) }}" method="post" id="deleteForm">
    @csrf
    @method('DELETE')
</form>
@endsection