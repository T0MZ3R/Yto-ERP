@extends('layouts/base', ['title' => 'Dashboard'])

@section('assets')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">

    <script src="https://kit.fontawesome.com/if7457abdb.js"></script>
    
@endsection

@section('content')

    
    

    <div id="conteneur">
        <div id="stat" >Statistique <a href="#"></a></div>
        <div id="fac">Derniere facture</div>
        <div id="fav">Favoris</div>
        <div id="ca">chiffre de la journee</div>
        <div id="cam">chiffre du mois </div>
        <div id="log">Log</div>
    </div>
    
@endsection