@extends('layouts/base', ['title' => 'Dashboard'])

@section('assets')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/dashboard.css">
    
@endsection

@section('content')
<div id="container">
    <div id="stat">
        <h2>Statistique</h2>
    </div>
    <div id="fac">
        <h2>Derniere facture</h2>
        <table class="table table-hover table-bordered results">
        <table>
            <tbody>
                @for($i = 2; $i >= 0; $i--)
                <tr>
                    <td>{{ $lastFacture[$i]->created_at }}</td>
                    <td>{{ $lastFacture[$i]->price * $lastFacture[$i]->nb }}&euro;</td>
                    <td><a class="centered" href="{{ route('editClient', $lastFacture[$i]->id) }}"><img src="/images/print.png" width="20px" alt=""></a></td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
    <div id="ca">
        <h2>Chiffre de la journée</h2>
        <p>{{ $ca }}&euro;</p>
    </div>
    <div id="caw">
        <h2>Chiffre semaine</h2>
        <p>{{ $caw }}&euro;</p>
    </div>
    <div id="cam">
        <h2>Chiffre du mois</h2>
        <p>{{ $cam }}&euro;</p>
    </div>
</div>
@endsection