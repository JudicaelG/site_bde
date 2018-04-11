<nav class="navbar navbar-expand navbar-dark bg-dark">


    <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/accueil">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/evenement">Evenement <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/boutique">Boutique <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/boiteidee">Boite a idee <span class="sr-only">(current)</span></a>
            </li>
			@guest
				<li "nav-item active"><a class="nav-link" href="{{ route('login') }}">Se connecter <span class="sr-only">(current)</span></a></li>
				<li "nav-item active"><a class="nav-link" href="{{ route('register') }}">S'inscrire <span class="sr-only">(current)</span></a></li>
			@else
				<li "nav-item active"><a id="logout" class="nav-link" href="{{ route('logout') }}">Déconnexion</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
                            {{ csrf_field() }}
                        </form>
                </li>
			@endguest
        </ul>
        <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Search">
        </form>
    </div>
</nav>

<script src="{{ asset('js/app.js') }}"></script>

    <script>
        $(function() {
            $('#logout').click(function(e) {
                e.preventDefault();
                $('#logout-form').submit()
            })
        })
    </script>