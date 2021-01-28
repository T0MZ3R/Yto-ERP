@extends('layouts/base', ['title' => 'Stock'])

@section('assets')
   <link rel="stylesheet" href="/assets/css/stock.css" media="screen">
    <script src="/assets/js/stock.js"></script>
    <script src="/assets/js/add-to-facture.js"></script>
    
    <style>
      td a{
        margin: 0 5px 0 5px;
      }
    </style>
    
@endsection

@section('content')
  <div class="container">
    <a href="{{ route('createStock') }}"><button type="button" class="btn btn-success">+ Créer un nouvel element dans le stock +</button></a>
    <div class="form-group pull-right">
      <input type="text" class="search form-control" placeholder="Mot clé">
    </div>
    <span class="counter pull-right"></span>
    <table class="table table-hover table-bordered results">
      <thead>
        <tr>
          <th>Dimension</th>
          <th>Marque</th>
          <th>Stock</th>
          <th>Prix</th>
          <th>Action</th>
        </tr>
        <tr class="warning no-result">
          <td colspan="4"><i class="fa fa-warning"></i> Pas de résultat</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($stock as $item)
          <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $marque[$item->id_marque-1]->name }}</td>
            <td>{{ $item->nb }}</td>
            <td>{{ $item->price }}</td>
            
            <td><div class="d-flex justify-content-center"><a class="add-stock-to-facture" id="{{ $item->id }}"><img src="/images/add.png" width="20px" alt=""></a><a href="{{ route('editStock', $item->id) }}"><img src="/images/edit.png" width="20px" alt=""></a></div></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <form action="{{ route('storeStockInSession') }}" method="post" id="createFacture">
    @csrf
    <input type="hidden" name="id" id="hiddenStockIdForFacture" value="{{ $item->id }}">
  </form>
@endsection