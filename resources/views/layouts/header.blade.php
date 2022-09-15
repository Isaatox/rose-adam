<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3"
        style="box-sizing: content-box;
    width: 100%;
    padding: 5px;
    background-color: rgba(255, 255, 255, 0.74);">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index.view') }}#">
                <img src="/assets/Capture_d_écran_2022-09-15_à_16.24.41-removebg-preview.png" width="65"
                    alt="" srcset="">&nbsp;&nbsp;&nbsp;
                <span style="font-family: 'SnellRoundhand'; 
                font-size: 1.3em;">Les Roses Adam</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" id="night"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="{{ route('index.view') }}#" id="test">ACCUEIL</a>
                    <a class="nav-link" href="{{ route('index.view') }}#a_propos" id="test2">A PROPOS</a>
                    {{-- <a class="nav-link" href="{{route('index.view')}}#notre_equipe" id="test3">NOTRE ÉQUIPE</a> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="test5" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">NOS ROSES</a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="test5">
                            <li><a class="dropdown-item" href="{{ route('roses.nobles-parfumes.view') }}">Nos Roses
                                    Nobles très parfumées</a></li>
                            <li><a class="dropdown-item" href="{{ route('roses.nobles.view') }}">Nos Roses Nobles</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('roses.fleurs.view') }}">Nos Rosiers à Fleurs
                                    Groupées</a></li>
                            <li><a class="dropdown-item" href="{{ route('roses.grimpants.view') }}">Nos Rosiers
                                    Grimpants</a></li>
                            <li><a class="dropdown-item" href="{{ route('roses.paysagers.view') }}">Nos Rosiers
                                    Paysagers</a></li>
                            <li><a class="dropdown-item" href="{{ route('roses.parfumes.view') }}">Nos Rosiers
                                    Parfumés</a></li>
                            <li><a class="dropdown-item" href="{{ route('roses.tiges.view') }}">Nos Rosiers Tiges</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('roses.view') }}">Tous Nos Rosiers</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="test6" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">NOS FRUITIERS</a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="test6">
                            <li><a class="dropdown-item" href="{{ route('fruitiers.abricotiers.view') }}">Nos
                                    Abricotiers</a></li>
                            <li><a class="dropdown-item" href="{{ route('fruitiers.amandiers.view') }}">Nos
                                    Amandiers</a></li>
                            <li><a class="dropdown-item" href="{{ route('fruitiers.cerisiers.view') }}">Nos
                                    Cerisiers</a></li>
                            <li><a class="dropdown-item" href="{{ route('fruitiers.pecher.view') }}">Nos Pêchers</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('fruitiers.poiriers.view') }}">Nos Poiriers</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('fruitiers.pruniers.view') }}">Nos Pruniers</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('fruitiers.pommiers.view') }}">Nos Pommiers</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('fruitiers.pommiers-cidre.view') }}">Nos
                                    Pommiers à Cidre</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('fruitiers.view') }}">Tous Nos Fruitiers</a>
                            </li>
                        </ul>
                    </li>
                    <a class="nav-link" href="{{ route('index.view') }}#p_commande" id="test4">COMMANDE</a>
                    <a class="nav-link" href="{{ route('index.view') }}#nous_contacter" id="test7">CONTACT</a>
                </div>
            </div>
        </div>
    </nav>
</header>
