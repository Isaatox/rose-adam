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
                                    <h5>Product Detail</h5>
                                </div>
                                <div class="card-body">
                                    <h3>Revue Details Fruitier</h3>
                                    <form action="{{ route('fruitier.store') }}" method="post">
                                        {{ csrf_field() }}
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>Varieté :</td>
                                                <td><strong>{{ $fruitier->variete }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Description:</td>
                                                <td><strong>{{ $fruitier->description }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Prix:</td>
                                                <td><strong>{{ $fruitier->prix }} €</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Recompense:</td>
                                                <td><strong>{{ $fruitier->recompenses }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>couleur:</td>
                                                <td><strong>{{ $fruitier->couleur }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Rendement :</td>
                                                <td><strong>{{ $fruitier->rendement }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Sucre :</td>
                                                <td><strong>{{ $fruitier->sucre }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Acidité :</td>
                                                <td><strong>{{ $fruitier->acidite }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>parfum:</td>
                                                <td><strong>{{ $fruitier->parfum }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>hauteur_cm:</td>
                                                <td><strong>{{ $fruitier->hauteur_cm }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>largeur_cm:</td>
                                                <td><strong>{{ $fruitier->largeur_cm }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>maladies:</td>
                                                <td><strong>{{ $fruitier->maladies }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Image:</td>
                                                <td><strong><img alt="Fruitier Image"
                                                            src="/storage/fruitierImg/{{ $fruitier->fruitierimg }}" /></strong>
                                                </td>
                                            </tr>
                                        </table>
                                        <a type="button" href="{{ route('fruitier.create') }}" class="btn btn-warning">Retourner Étape 1</a>
                                        <a type="button" href="{{ route('fruitier.create.step.2') }}"
                                            class="btn btn-warning">Retourner Étape 2</a>
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
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
