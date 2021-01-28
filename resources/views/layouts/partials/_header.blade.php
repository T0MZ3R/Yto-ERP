<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('dashboard') }}">YTO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active"  href="{{ route('indexStock') }}">Stocks</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('indexFacture') }}">Factures</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('indexClient') }}">Clients</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active"  href="{{ route('indexMarque') }}">Marques</a>
              </li>
              
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('signout') }}"><span class="glyphicon glyphicon-user">Deconnexion</a></li>

            </ul>
          </div>
        </div>
      </nav>

</header>