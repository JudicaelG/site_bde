<nav class="navbar navbar-expand-md bg-dark navbar-dark">

    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/accueil">Page d'accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/evenement">Évènements <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/boutique">Boutique <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/boiteidee">Boite à idée <span class="sr-only">(current)</span></a>
        </li>
		@if(\Request::is('boutique')){
		<li>
            <form class="form-inline my-2 my-md-0">
                <input class="form-control" type="text" placeholder="Recherche">
            </form>
        </li>
		@endif
        @guest
            <li class="nav-item active"><a class="nav-link connexion" href="{{ route('login') }}">Se connecter <span class="sr-only">(current)</span></a></li>
            <li class="nav-item active"><a class="nav-link inscription" href="{{ route('register') }}">S'inscrire <span class="sr-only">(current)</span></a></li>
        @else
            <li class="nav-item active"><a id="logout" class="nav-link" href="{{ route('logout') }}">Déconnexion</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
                        {{ csrf_field() }}
                    </form>
            </li>

        @endguest
    </ul>

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