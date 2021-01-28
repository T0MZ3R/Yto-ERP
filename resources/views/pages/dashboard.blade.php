@extends('layouts/base', ['title' => 'Dashboard'])

@section('assets')

<link rel="stylesheet" href="/assets/css/dashboard.css">
<link rel="stylesheet" href="/assets/css/border.css">


<script src="/assets/js/border.js"></script>
    
@endsection

@section('content')
<div id="container">
    
    <div class="mainContainer" id="stat">
        <div class="topBorder"></div>
        <div class="bottomBorder"></div>
        <div class="stat">
            <!-- TODO : Link that with the db -->
            <p>La marques de pneu la plus vendu est : Falken</p>
            <p>La dimensions la plus vendu est : 195 65 15 en 90 H</p>
        </div>
        <div class="widgetTitle">
            <h2>Statistique</h2>
        </div>
    </div>

    <div class="mainContainer" id="fac">
        <div class="topBorder"></div>
        <div class="bottomBorder"></div>
        <div class="widgetTitle">
            <h2>Derniere facture</h2>
        </div>
        <table class="table table-hover table-bordered results">
            <tbody>
                @for($i = 0; $i < 3; $i++)
                <tr>
                    <td>{{ $lastFacture[$i]->created_at}}</td>
                    <td>{{ $lastFacture[$i]->price * $lastFacture[$i]->nb }}&euro;</td>
                    <td><a class="centered generateFacture" id="{{ $lastFacture[$i]->id }}"><img src="/images/print.png" width="20px" alt=""></a></td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>

    <div id="ca">        
        <div class="widgetTitle">
            <h2>Chiffre de la journée</h2>
        </div>
        <p class="price">{{ $ca }}&euro;</p>
    </div>
    <div id="caw">
        <div class="widgetTitle">
            <h2>Chiffre semaine</h2>
        </div>
        <p class="price">{{ $caw }}&euro;</p>
    </div>
    <div id="cam">
        <div class="widgetTitle">
            <h2>Chiffre du mois</h2>
        </div>
        <p class="price">{{ $cam }}&euro;</p>
    </div>
</div>

<form action="{{ route('generateFacture') }}" method="post" id="generateFacture">
    @csrf
    <input type="hidden" name="id" id="hiddenFactureIdForInvoice">
</form>
<script>
    $(".generateFacture").click(function (){
        $("#hiddenFactureIdForInvoice")[0].value = $(this)[0].id;
        $("#generateFacture")[0].submit();
    });
</script>
@endsection