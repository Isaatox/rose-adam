<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3" style="box-sizing: content-box;
    width: 100%;
    padding: 5px;
    background-color: rgba(255, 255, 255, 0.74);">
        <div class="container">
            <a class="navbar-brand" href="#">
                Nom / Logo Entreprise
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="{{route('index.view')}}#" id="test">ACCUEIL</a>
                    <a class="nav-link" href="{{route('index.view')}}#a_propos" id="test2">A PROPOS</a>
                    <a class="nav-link" href="{{route('index.view')}}#p_commande" id="test4">COMMANDE</a>
                    <a class="nav-link" href="{{route('index.view')}}#notre_equipe" id="test3">NOTRE ÉQUIPE</a>
                    <a class="nav-link" href="{{route('roses.view')}}" id="test5">NOS ROSES</a>
                    <a class="nav-link" href="{{route('fruitiers.view')}}" id="test6">NOS FRUITIER</a>
                    <a class="nav-link" href="{{route('index.view')}}#nous_contacter" id="test7">CONTACT</a>
                </div>
            </div>
        </div>
    </nav>
</header>
