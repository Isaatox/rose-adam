<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roses Adam Administration') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.css') }}" />

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="col-md-8 offset-md-2">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h5>Details Roses</h5>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="{{ route('rose.create') }}"
                                                class="btn btn-md btn-success float-right"><i
                                                    class="fas fa-arrow-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3>Étape 2</h3>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{ route('rose.post.step.2') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Marque: </label>
                                            <input type="text" name="marque" class="form-control mb-2"
                                                placeholder="Enter marque" value="{{ session()->get('rose.marque') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Denomination: </label>
                                            <input type="text" name="denomination" class="form-control mb-2"
                                                placeholder="Enter denomination"
                                                value="{{ session()->get('rose.denomination') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">edition: </label>
                                            <input type="text" name="edition" class="form-control mb-2"
                                                placeholder="Enter edition"
                                                value="{{ session()->get('rose.edition') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">type: </label>
                                            <input type="text" name="type" class="form-control mb-2"
                                                placeholder="Enter type" value="{{ session()->get('rose.type') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">gamme: </label>
                                            <input type="text" name="gamme" class="form-control mb-2"
                                                placeholder="Enter gamme" value="{{ session()->get('rose.gamme') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">forme: </label>
                                            <input type="text" name="forme" class="form-control mb-2"
                                                placeholder="Enter forme" value="{{ session()->get('rose.forme') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">couleur: </label>
                                            <input type="text" name="couleur" class="form-control mb-2"
                                                placeholder="Enter couleur"
                                                value="{{ session()->get('rose.couleur') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">largeur_diam: </label>
                                            <input type="text" name="largeur_diam" class="form-control mb-2"
                                                placeholder="Enter largeur diametre"
                                                value="{{ session()->get('rose.largeur_diam') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">nb_petales: </label>
                                            <input type="text" name="nb_petales" class="form-control mb-2"
                                                placeholder="Enter nb_petales"
                                                value="{{ session()->get('rose.nb_petales') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">parfum: </label>
                                            {{-- <input type="text" name="parfum" class="form-control mb-2"
                                                placeholder="Enter parfum" value="{{ session()->get('rose.parfum') }}"> --}}
                                                <select name="parfum" id="" class="form-control mb-2">
                                                    {{-- <option value="{{ session()->get('rose.parfum') }}" selected></option> --}}
                                                    <option value="Faible">Faible</option>
                                                    <option value="Moyen">Moyen</option>
                                                    <option value="Fort">Fort</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">port: </label>
                                            <input type="text" name="port" class="form-control mb-2"
                                                placeholder="Enter port" value="{{ session()->get('rose.port') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">vegetation: </label>
                                            <input type="text" name="vegetation" class="form-control mb-2"
                                                placeholder="Enter vegetation"
                                                value="{{ session()->get('rose.vegetation') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">hauteur_cm: </label>
                                            <input type="text" name="hauteur_cm" class="form-control mb-2"
                                                placeholder="Enter hauteur en cm"
                                                value="{{ session()->get('rose.hauteur_cm') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">largeur_cm: </label>
                                            <input type="text" name="largeur_cm" class="form-control mb-2"
                                                placeholder="Enter largeur en cm"
                                                value="{{ session()->get('rose.largeur_cm') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">feuillage: </label>
                                            <input type="text" name="feuillage" class="form-control mb-2"
                                                placeholder="Enter feuillage" value="{{ session()->get('rose.feuillage') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">maladies: </label>
                                            <select name="maladies" id="" class="form-control mb-2">
                                                {{-- <option value="{{ session()->get('rose.parfum') }}" selected></option> --}}
                                                <option value="Faible">Faible</option>
                                                <option value="Moyen">Moyen</option>
                                                <option value="Fort">Fort</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">inflorescence: </label>
                                            <input type="text" name="inflorescence" class="form-control mb-2"
                                                placeholder="Enter inflorescence" value="{{ session()->get('rose.inflorescence') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">floraison: </label>
                                            <input type="text" name="floraison" class="form-control mb-2"
                                                placeholder="Enter floraison" value="{{ session()->get('rose.floraison') }}">
                                        </div>
                                        <a type="button" href="{{ route('rose.create') }}"
                                            class="btn btn-warning">Retourner Étape 1</a>
                                        <button type="submit" class="btn btn-primary">Continue</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
