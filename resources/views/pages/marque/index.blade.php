@extends('layouts/base', ['title' => 'Stock'])

@section('assets') 
    <link rel="stylesheet" href="/assets/css/stock.css" media="screen">
    <script src="/assets/js/stock.js"></script>
    
@endsection

@section('content')
  <div class="container">
    <a href="{{ route('createMarque') }}"><button type="button" class="btn btn-success">+ Créer un nouvel element dans les marques +</button></a>
    <div class="form-group pull-right">
      <input type="text" class="search form-control" placeholder="Mot clé">
    </div>
    <span class="counter pull-right"></span>
    <table class="table table-hover table-bordered results">
      <thead>
        <tr>
          <th>Marque</th>
          <th>Action</th>
        </tr>
        <tr class="warning no-result">
          <td colspan="4"><i class="fa fa-warning"></i> Pas de résultat</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($marque as $item)
          <tr>
            <td>{{ $item->name }}</td>
            <td><a class="centered" href="{{ route('editMarque', $item->id) }}"><img src="/images/edit.png" width="20px" alt=""></a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection