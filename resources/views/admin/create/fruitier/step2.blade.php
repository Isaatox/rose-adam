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
                                            <h5>Details Fruitier</h5>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="{{ route('fruitier.create') }}"
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
                                    <form action="{{ route('fruitier.post.step.2') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="rendement">Rendement: </label>
                                            <input type="text" name="rendement" class="form-control mb-2"
                                                placeholder="Entrer rendement" value="{{ session()->get('fruitier.rendement') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="sucre">Sucre : </label>
                                            <input type="text" name="sucre" class="form-control mb-2"
                                                placeholder="Entrer sucre"
                                                value="{{ session()->get('fruitier.sucre') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="acidite">Acidité : </label>
                                            <input type="text" name="acidite" class="form-control mb-2"
                                                placeholder="Entrer acidité"
                                                value="{{ session()->get('fruitier.acidite') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">couleur: </label>
                                            <input type="text" name="couleur" class="form-control mb-2"
                                                placeholder="Entrer couleur"
                                                value="{{ session()->get('fruitier.couleur') }}">
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
                                            <label for="name">hauteur_cm: </label>
                                            <input type="text" name="hauteur_cm" class="form-control mb-2"
                                                placeholder="Entrer hauteur en cm"
                                                value="{{ session()->get('fruitier.hauteur_cm') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="largeur_cm">largeur_cm: </label>
                                            <input type="text" name="largeur_cm" class="form-control mb-2"
                                                placeholder="Entrer largeur en cm"
                                                value="{{ session()->get('fruitier.largeur_cm') }}">
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
                                        <a type="button" href="{{ route('fruitier.create') }}"
                                            class="btn btn-warning">Retourner Étape 1</a>
                                        <button type="submit" class="btn btn-primary">Continuer</button>
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
