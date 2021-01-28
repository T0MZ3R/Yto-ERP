@extends('layouts/base', ['title' => 'Facture'])

@section('assets')
    <link rel="stylesheet" href="/assets/css/stock.css" media="screen">
    <script src="/assets/js/stock.js"></script>
@endsection

@section('content')
  <div class="container">
    <div class="form-group pull-right">
      <input type="text" class="search form-control" placeholder="Mot clé">
    </div>
    <span class="counter pull-right"></span>
    <table class="table table-hover table-bordered results">
      <thead>
        <tr>
          <th>Date de création</th>
          <th>Client concerné</th>
          <th>Taille</th>
          <th>Marque</th>
          <th>Nombre</th>
          <th>Prix</th>
          <th>Action</th>
        </tr>
        <tr class="warning no-result">
          <td colspan="4"><i class="fa fa-warning"></i> Pas de résultat</td>
        </tr>
      </thead>
      <tbody>
        @foreach ($facture as $item)
          <tr>
            <td>{{ $item->created_at }}</td>
            <td>{{ $client[$item->id_client-1]->name }}</td>
            <td>{{ $stock[$item->id_stock-1]->name }}</td>
            <td>{{ $marque[$stock[$item->id_stock-1]->id_marque-1]->name }}</td>
            <td>{{ $item->nb }}</td>
            <td>{{ $item->nb*$item->price }}</td>
            <td>
              <a class="centered generateFacture" id="{{ $item->id }}"><img src="/images/print.png" width="20px" alt=""></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <form action="{{ route('generateFacture') }}" method="post" id="generateFacture">
    @csrf
    <input type="hidden" name="id" id="hiddenFactureIdForInvoice" value="{{ $item->id }}">
  </form>
  <script>
    $(".generateFacture").click(function (){
      $("#hiddenFactureIdForInvoice")[0].value = $(this)[0].id;
      $("#generateFacture")[0].submit();
    });
  </script>
@endsection