@extends('layouts.main')

@section('pageTitle', 'Les Roses Adam')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/espece.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <style type="text/css">
        .searchFilter {
            margin-bottom: 20px;
        }

        .searchFilter.btn {
            display: inline-block;
            font-weight: 400;
            line-height: 1.25;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .5rem 1rem;
            font-size: 16px;
            border-radius: .25rem;
            height: 50px;
            min-width: 20px;
        }

        .searchFilter .btn-secondary {
            color: #373a3c;
            background-color: #fff;
            border: 1px solid #ccc;
        }

        .searchFilter .btn-secondary:hover {
            color: #373a3c;
            background-color: #e6e6e6;
            border-color: #adadad;
        }

        .searchFilter .btn-search {
            background-color: #00aced;
            color: #fff;
            border: 1px solid #00aced;
        }

        .searchFilter .btn-search:hover {
            background-color: #e509ec;
            color: #fff;
            border: 1px solid #e509ec;
        }

        .searchFilter .label-icon {
            display: none;
        }

        .searchFilter .glyphicon {
            margin-right: -15px;
        }

        .searchFilter .dropdown-menu .category_filters {
            min-width: 178px;
            width: 100%;
            margin: 15px 0 0 -25px;
        }

        .searchFilter .dropdown-menu-right {
            right: 170px;
            min-width: 175px;
            top: 90%;
        }

        .searchFilter .dropdown-menu .category_filters li {
            list-style-type: none;
            padding: 2px 10px;
            font-size: 18px;
        }

        .searchFilter .dropdown-menu .category_filters label {
            margin-left: 15px;
        }

        @media (min-width: 1400px) {
            .ct-header .ct-jumbotron .inner {
                max-width: 470px;
                min-height: 230px;
            }
        }

        @media (max-width: 1400px) {
            .ct-header-slider .item {
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center top;
            }
        }

        @media (min-width: 769px) and (max-width: 1400px) {
            .ct-header-slider .item {
                height: auto;
            }
        }

        @media (max-width: 1260px) {
            #dots-container {
                display: none;
            }
        }

        @media (min-width: 992px) {
            .ct-footer2 .ct-newsletter {
                max-width: 100%;
            }

            #dots-container {
                bottom: 100px;
            }
        }

        @media (min-width: 768px) {
            .ct-searchbar:before {
                height: 92px;
                bottom: -1px;
            }

            .page-scrolled .navbar .navbar-nav li>* {
                min-height: 67px;
                height: 67px;
            }

            .page-scrolled .navbar .navbar-nav {
                height: 100% !important;
            }

            .ct-current-facts h2 {
                margin: 0 auto 0px;
            }

            .contentNews .ct-recent-news {
                flex-direction: inherit;
            }

            .contentFaq .faq_question .col-sm-11 {
                padding-right: 0px;
            }

            .peopleDetail h2 {
                margin-top: -5px;
            }

            .searchFilter .btn {
                min-width: 172px;
            }

            .searchFilter .label-icon {
                display: inline-block;
            }

            .searchFilter .glyphicon {
                margin-right: -5px;
            }

            .ct-header .ct-jumbotron {
                top: 0;
                margin-top: 5%;
            }

            .ct-header .ct-jumbotron h1 {
                font-size: 2.5em;
            }

            .ct-news.ct-news--bigger h3 {
                font-size: 41px;
                line-height: 1.4;
            }
        }

        @media (max-width: 768px) {
            .ct-header .ct-jumbotron {
                width: 80%;
                margin: 20px 10px;
                top: 40%;
                width: 95%;
            }

            .ct-header .ct-jumbotron .inner {
                max-width: 100%;
            }

            #dots-container {
                display: none;
            }

            .main-section {
                margin-top: -80px;
            }

            .searchFilter .dropdown-menu-right {
                right: 0px;
            }
        }
    </style>

    <div class="container" style="margin-bottom: 5rem !important; margin-top: 6rem !important">
        <div class="row searchFilter">
            <div class="col-sm-12">
                <form action="{{url('/fruitiers/search')}}" method="post">
                    {!! csrf_field() !!}
                    <div class="input-group">
                        <input class="form-control" id="form1" type="text" name="search" 
                            placeholder="Rechercher une variété de Fruitier ..." style="border-radius: 1rem !important">
                        <div class="position-absolute invisible" id="form1_complete" style="margin-top: 2rem"></div>

                        {{-- <div class="input-group-btn">&nbsp;
                        <button type="button" class="btn btn-warning" style="border-radius: 1rem !important"
                            data-bs-toggle="modal" data-bs-target="#Filtres"><span class="label-icon">+ de
                                Filtres</span>&nbsp;<i class="fas fa-filter"></i></button>

                        <div class="modal fade" id="Filtres" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <form action="#">
                                                <div class="mb-3">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <button id="searchBtn" type="input" class="btn btn-secondary btn-search"
                            style="border-radius: 1rem !important"><span class="glyphicon glyphicon-search">&nbsp;</span>
                            <span class="label-icon">Rechercher</span>&nbsp;<i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <div class="container" style="margin-bottom: 5rem !important; margin-top: 6rem !important">
        <h2>Nos Fruitiers</h2>
        <p class="float-right">{{ $nbrfruitiers }} résultat</p>
        @if ( !empty($recherche))
            Recherche : <strong>{{$recherche}}</strong>
        @endif
        <hr>
        <div class="row m-0">
            @foreach ($fruitiers as $fruitier)
                <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
                    <div class="card">
                        <img src="/storage/fruitierImg/{{ $fruitier->fruitierimg }}" width="312" height="312" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h3 class="card-title">{{ $fruitier->variete }}</h3>
                            <p class="card-text">{{ $fruitier->description }}</p>
                            <p class="text-muted">{{ $fruitier->prix }} €</p>

                            <button data-bs-toggle="modal" data-bs-target="#Fruitier{{ $fruitier->id }}"
                                class="btn btn-primary">En savoir
                                plus</button>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="Fruitier{{ $fruitier->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ $fruitier->variete }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="/storage/fruitierImg/{{ $fruitier->fruitierimg }}" class="card-img-top"
                                                alt="...">
                                        </div>
                                        <div class="col-md-5">
                                            <ul>
                                                <li><strong>Rendement :</strong> {{ $fruitier->rendement }}</li>
                                                <li><strong>Sucre :</strong>{{ $fruitier->sucre }}</li>
                                                <li><strong>Acidité :</strong>{{ $fruitier->acidite }}</li>
                                                <li><strong>Couleur :</strong>{{ $fruitier->couleur }}</li>
                                                <li><strong>Parfum :</strong>{{ $fruitier->parfum }}</li>
                                                <li><strong>Hauteur (cm.) : </strong>{{ $fruitier->hauteur_cm }}</li>
                                                <li><strong>Largeur (cm.) : </strong>{{ $fruitier->largeur_cm }}</li>
                                                <li><strong>Résistance aux Maladies : </strong>{{ $fruitier->maladies }}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <h4 style="color: #e509ec">Description :</h4>
                                            <p>{{ $fruitier->description }}</p>
                                            <div class="row">
                                                <div class="col-8 col-sm-8">
                                                    <h4 style="color: #e509ec">Récompenses :</h4>
                                                    <p>{{ $fruitier->recompenses }}</p>
                                                </div>
                                                <div class="col-8 col-sm-8">
                                                    <h4 style="color: #e509ec">Prix :</h4>
                                                    <p>{{ $fruitier->prix }} €</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>


    <script type="text/javascript">
        var nav = document.querySelector('nav');
        var navL = document.querySelector('#test');
        var navL2 = document.querySelector('#test2');
        var navL3 = document.querySelector('#test3');
        var navL4 = document.querySelector('#test4');
        var navL5 = document.querySelector('#test5');
        var navL6 = document.querySelector('#test6');
        var navL7 = document.querySelector('#test7');


        nav.classList.add('bg-dark', 'shadow');
        navL.classList.add('text-light');
        navL2.classList.add('text-light');
        navL3.classList.add('text-light');
        navL4.classList.add('text-light');
        navL5.classList.add('text-light');
        navL6.classList.add('text-light');
        navL7.classList.add('text-light');
    </script>
    <script src="https://kit.fontawesome.com/e838603ccd.js" crossorigin="anonymous"></script>
    <script src="{{ url('assets/js/autocomplete.js') }}"></script>
    <script>
        // const autocomplete_example1 = ['Alfred', 'Alfons', 'Alf', 'Alfonso', 'Alfredo', 'Alfine'];
        // set_autocomplete('form1', 'form1_complete', autocomplete_example1);
    </script>
@stop
