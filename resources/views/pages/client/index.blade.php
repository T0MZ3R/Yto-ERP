@extends('layouts/base', ['title' => 'Stock'])

@section('assets')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">    
    <link rel="stylesheet" href="/assets/css/stock.css" media="screen">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="/assets/js/stock.js"></script>
    
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
            <td><a class="centered" href="{{ route('editClient', $item->id) }}"><img src="/images/edit.png" width="20px" alt=""></a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection