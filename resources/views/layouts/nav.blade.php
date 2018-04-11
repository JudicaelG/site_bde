<nav class="navbar navbar-expand navbar-dark bg-dark">


    <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="accueil">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="evenement">Evenement <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="boutique">Boutique <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="boiteAidee">Boite a idee <span class="sr-only">(current)</span></a>
            </li>
			@if (Auth::check())
				<li><a href="{{ route('login') }}">Se connecter <span class="sr-only">(current)</span></a></li>
				<li><a href="{{ route('register') }}">S'inscrire <span class="sr-only">(current)</span></a></li>
			@else
				{{ csrf_field() }}
				<li><a href="{{ route('logout') }}">Déconnexion</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
                {{ csrf_field() }}
                </form>
				</li>
			@endif
        </ul>
        <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Search">
        </form>
    </div>
</nav>