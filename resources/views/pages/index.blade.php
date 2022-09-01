@extends('layouts.main')

@section('pageTitle', 'Les Roses Adam')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css') }}" />
    <style type="text/css">
        .map {
            width: 100%;
            height: 100%;
        }

        .card-img-left {
            width: 45%;
            /* Link to your background image using in the property below! */
            background: scroll center url('');
            background-size: cover;
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }
    </style>
    <!-- Banner Image  -->
    {{-- <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="content text-center">
            <h1 class="text-white rose">Nom de l'entreprise</h1>
        </div>
    </div> --}}

    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="rose">LES ROSES ADAM</h1>
            <h2>Rossiériste depuis 1995</h2>
            <a href="#a_propos" class="btn-get-started"><i class="fas fa-chevron-circle-down fa-2x"></i></a>
        </div>
    </section>

    <main id="main">

        <section id="a_propos">
            <div class="container" data-aos="fade-up">
                <div class="row about-container">

                    <div class="col-lg-6 content order-lg-1 order-2">
                        <h2 class="title">A propos de nous</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="fas fa-calendar"></i></div>
                            <h4 class="title">Depuis quand</h4>
                            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                                tempore, cum soluta nobis est eligendi</p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="fas fa-briefcase"></i></div>
                            <h4 class="title">Pourquoi nous faisons ce métier</h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum</p>
                        </div>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="fas fa-seedling"></i></div>
                            <h4 class="title">Ce que l'on fait</h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat tarad limino ata</p>
                        </div>

                    </div>

                    {{-- <div class="col-lg-6 background order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100"></div> --}}
                    <div id="carouselExampleIndicators" class="carousel slide col-lg-6 order-lg-2 order-1"
                        data-bs-ride="carousel">
                        <div class="carousel-indicators" style="margin-bottom: 2rem;">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://www.zupimages.net/up/22/34/h4tm.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.zupimages.net/up/22/34/w0t2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://www.zupimages.net/up/22/34/xhw3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </section>

        <section id="chiffres">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Un peu de chiffres</h3>
                    <p class="section-description">Nos années d'éxpérience ainsi que nos différentes variétées</p>
                </div>
                <div class="row counters">


                    <div class="col-sm text-center">
                        <span class="counters">35</span>
                        <p>années d'éxpérience</p>
                    </div>

                    <div class="col-sm text-center">
                        <span class="counters">{{ $nbrroses }}</span>
                        <p>variétés de rosiers</p>
                    </div>

                    <div class="col-sm text-center">
                        <span class="counters">{{ $nbrfruitiers }}</span>
                        <p>variétés de fruitiers</p>
                    </div>

                </div>

            </div>
        </section>

        <section id="p_commande">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Passez commande</h3>
                    <p class="section-description">Voici comment passez commande</p>
                </div>
                <div class="hori-timeline" dir="ltr">

                    <div class="row">
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                            <div class="box">
                                <div class="icon"><a href=""><i class="fas fa-cart-arrow-down"></i></a></div>
                                <h4 class="title"><a href="">Étape 1</a></h4>
                                <p class="description">Regardez les différentes variétés de roses et de fruitiers.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                            <div class="box">
                                <div class="icon"><a href=""><i class="fas fa-eye"></i></a></div>
                                <h4 class="title"><a href="">Étape 2</a></h4>
                                <p class="description">Notez les variétés que vous souhaitez avoir afin de les donnez lors
                                    de l'envoie du mail.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                            <div class="box">
                                <div class="icon"><a href=""><i class="fas fa-envelope-open-text"></i></a></div>
                                <h4 class="title"><a href="">Étape 3</a></h4>
                                <p class="description">Envoyez un mail avec le formulaire de contact afin de commandez les
                                    variétés que vous avez séléctionnées au préalable.</p>
                            </div>
                        </div>
                    </div>

                </div>
        </section>

        <section id="p_contact">
            <div class="container">
                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3 class="b-title">Nous envoyer un mail</h3>
                        <p class="b-text"> En cliquand vous accèderez au formulaire de contact.</p>
                    </div>
                    <div class="col-lg-3 b-btn-container text-center">
                        <a class="b-btn align-middle" href="#nous_contacter">Nous Contacter</a>
                    </div>
                </div>

            </div>
        </section>

        <section id="notre_equipe">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Notre Équipe</h3>
                    <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque</p>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class="membre" data-aos="fade-up" data-aos-delay="100">
                            <div class="pic"><img src="https://source.unsplash.com/XHVpWcr5grQ/600x600"
                                    alt=""></div>
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>

                        </div>
                    </div>

                    <div class="col-sm">
                        <div class="membre" data-aos="fade-up" data-aos-delay="200">
                            <div class="pic"><img src="https://source.unsplash.com/XHVpWcr5grQ/600x600"
                                    alt=""></div>
                            <h4>Sarah Jhinson</h4>
                            <span>Product Manager</span>

                        </div>
                    </div>

                    <div class="col-sm">
                        <div class="membre" data-aos="fade-up" data-aos-delay="300">
                            <div class="pic"><img src="https://source.unsplash.com/XHVpWcr5grQ/600x600"
                                    alt=""></div>
                            <h4>William Anderson</h4>
                            <span>CTO</span>

                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="nous_contacter">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">Contact</h3>
                    <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque</p>
                </div>
            </div>
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 col-xl-11 mx-auto">
                                    <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                                        {{-- <div class="card-img-left d-none d-md-flex">
                                            <div class="map">
                                                <img src="https://images.unsplash.com/photo-1496062031456-07b8f162a322?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&w=1000&q=80"
                                                    width="550em" height="650em" alt="">
                                            </div>
                                        </div> --}}
                                        <div class="card-body p-4 p-sm-5">
                                            <h5 class="card-title text-center mb-5 fs-2 fw-bold">Nous Contacter</h5>
                                            <form method="POST" action="{{ route('contact.store') }}"
                                                id="contactUSForm">
                                                {{ csrf_field() }}
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" name="name"
                                                        id="floatingInputName" placeholder="Nom Prénom"
                                                        value="{{ old('name') }}" required>
                                                    <label for="floatingInputName">Nom Prénom</label>
                                                    @if ($errors->has('name'))
                                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                                <div class="row g-2 mb-3">
                                                    <div class="col-md">
                                                        <div class="form-floating">
                                                            <input type="email" class="form-control" name="email"
                                                                id="floatingInputEmail" value="{{ old('email') }}"
                                                                placeholder="name@example.com">
                                                            <label for="floatingInputEmail">Adresse Mail</label>
                                                        </div>
                                                        @if ($errors->has('email'))
                                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                                        @endif

                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control"
                                                                value="{{ old('phone') }}" id="floatingPhone"
                                                                name="phone" placeholder="Téléphone">
                                                            <label for="floatingPhone">Téléphone</label>
                                                        </div>
                                                        @if ($errors->has('phone'))
                                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control"
                                                        value="{{ old('subject') }}" id="floatingSujet" name="subject"
                                                        placeholder="Sujet">
                                                    <label for="floatingSujet">Sujet</label>
                                                    @if ($errors->has('subject'))
                                                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" placeholder="Ecrire son message"
                                                        id="floatingTextarea2" name="message" style="height: 100px">{{ old('message') }}</textarea>
                                                    <label for="floatingTextarea2">Message</label>
                                                    @if ($errors->has('message'))
                                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                                    @endif
                                                </div>

                                                <div class="d-grid mb-2">
                                                    <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase"
                                                        type="submit">Envoyer</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker fa-3x"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Adresse:</span> Liffré</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone fa-3x"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Phone:</span> <a href="tel://1234567920">+33 7 82 84 85 86</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dbox w-100 text-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fas fa-envelope fa-3x"></span>
                                    </div>
                                    <div class="text">
                                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">contact@email.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script type="text/javascript">
        var nav = document.querySelector('nav');
        var navL = document.querySelector('#test');
        var navL2 = document.querySelector('#test2');
        var navL3 = document.querySelector('#test3');
        var navL4 = document.querySelector('#test4');
        var navL5 = document.querySelector('#test5');
        var navL6 = document.querySelector('#test6');
        var navL7 = document.querySelector('#test7');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-dark', 'shadow');
                navL.classList.add('text-light');
                navL2.classList.add('text-light');
                navL3.classList.add('text-light');
                navL4.classList.add('text-light');
                navL5.classList.add('text-light');
                navL6.classList.add('text-light');
                navL7.classList.add('text-light');

            } else {
                nav.classList.remove('bg-dark', 'shadow');
                navL.classList.remove('text-light');
                navL2.classList.remove('text-light');
                navL3.classList.remove('text-light');
                navL4.classList.remove('text-light');
                navL5.classList.remove('text-light');
                navL6.classList.remove('text-light');
                navL7.classList.remove('text-light');

            }
        });
    </script>
    <script src="https://kit.fontawesome.com/e838603ccd.js" crossorigin="anonymous"></script>


@endsection
