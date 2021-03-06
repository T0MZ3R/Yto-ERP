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
    <a href="{{ route('createClient') }}"><button type="button" class="btn btn-success">+ Créer un nouveau client +</button></a>
    <div class="form-group pull-right">
      <input type="text" class="search form-control" placeholder="Mot clé">
    </div>
    <span class="counter pull-right"></span>
    <table class="table table-hover table-bordered results">
      <thead>
        <tr>
          <th>Client</th>
          <th>Adresse</th>
          <th>Mail</th>
          <th>Telephone</th>
          <th>Action</th>
        </tr>
        <tr class="warning no-result">
          <td colspan="4"><i class="fa fa-warning"></i> Pas de résultat</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($client as $item)
          <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->address }}</td>
            <td>{{ $item->mail }}</td>
            <td>0{{ $item->phone }}</td>
            <td><div class="d-flex justify-content-center"><a class="add-client-to-facture" id="{{ $item->id }}"><img src="/images/add.png" width="20px" alt=""></a><a href="{{ route('editClient', $item->id) }}"><img src="/images/edit.png" width="20px" alt=""></a></div></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <form action="{{ route('storeClientInSession') }}" method="post" id="createFacture">
    @csrf
    <input type="hidden" name="id" id="hiddenClientIdForFacture" value="{{ $item->id }}">
  </form>
@endsection