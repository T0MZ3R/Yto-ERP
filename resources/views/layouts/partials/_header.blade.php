<header>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('dashboard') }}">YTO</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ route('indexStock') }}">Stock</a></li>
                <li><a href="{{ route('indexFacture') }}">Facture</a></li>
                <li><a href="{{ route('indexClient') }}">Clients</a></li>
                <li><a href="{{ route('indexMarque') }}">Marques</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('signout') }}"><span class="glyphicon glyphicon-user">Deconnexion</a></li>

            </ul>
        </div>
    </nav>

</header>