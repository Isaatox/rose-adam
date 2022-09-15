<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roses Adam Administration Textes Accueil') }}
        </h2>
    </x-slot>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.css') }}" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Modifier les textes
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="container">
                                        <div class="col-md-8 offset-md-2">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <h5>Modifier les textes</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h3>Les différents textes</h3>
                                                    @if ($errors->any())
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif
                                                    <form action="{{ route('editpropos') }}" method="POST">
                                                        @csrf
                                                        @foreach ($textpropos as $text)
                                                            <label>A propos description : </label>
                                                            <div class="input-group mb-2">
                                                                <textarea name="description" id="description" class="form-control" cols="20" rows="10">{{ $text->propos_desc }}</textarea>
                                                            </div>

                                                            <label>Depuis quand : </label>
                                                            <div class="input-group mb-2">
                                                                <textarea name="quand" id="quand" class="form-control" cols="20" rows="10">{{ $text->propos_quand }}</textarea>
                                                            </div>

                                                            <label>Pourquoi nous faison ce métier : </label>
                                                            <div class="input-group mb-2">
                                                                <textarea name="pourquoi" id="pourquoi" class="form-control" cols="20" rows="10">{{ $text->propos_pourquoi }}</textarea>
                                                            </div>

                                                            <label>Ce que l'on fait : </label>
                                                            <div class="input-group mb-2">
                                                                <textarea name="fait" id="fait" class="form-control" cols="20" rows="10">{{ $text->propos_fait }}</textarea>
                                                            </div>
                                                        @endforeach
                                                        <button type="submit" class="btn btn-primary">Modifier</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo">
                                    Modifier l'annonce
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <div class="container">
                                        <div class="col-md-8 offset-md-2">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <h5>Modifier l'annonce</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <h3>L'annonce actuelle</h3>
                                                    @if ($errors->any())
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif
                                                    <form action="{{ route('editannonce') }}" method="POST">
                                                        @csrf
                                                        @foreach ($annonce as $ann)
                                                            <label>Texte de l'annonce : </label>
                                                            <div class="input-group mb-2">
                                                                <input type="text" name="annonce" id="annonce"
                                                                    class="form-control" value="{{ $ann->annonce }}">
                                                            </div>
                                                            <div class="form-group mb-3">
                                                                <label for="active">Activer l'annonce : </label>
                                                                <div class="form-control">
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="active" id="active" value="Oui"
                                                                            {{ $ann->active == 'Oui' ? 'checked' : '' }}>
                                                                        <label class="form-check-label"
                                                                            for="active">Oui</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio"
                                                                            name="active" id="active"
                                                                            value="Non"
                                                                            {{ $ann->active == 'Non' ? 'checked' : '' }}>
                                                                        <label class="form-check-label"
                                                                            for="active">Non</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        <button type="submit"
                                                            class="btn btn-primary">Modifier</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    <img src="..." class="img-thumbnail" alt="...">
                                    <img src="..." class="img-thumbnail" alt="...">
                                    <img src="..." class="img-thumbnail" alt="...">

                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
