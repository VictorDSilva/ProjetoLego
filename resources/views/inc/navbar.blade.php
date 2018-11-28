<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="#">Sistema Lego</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ action('PecaController@index') }}">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ action('PecaController@index') }}">Peças</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ action('KitController@index') }}">Kits</a>
            </li>
        </ul>
    </div>
</nav>