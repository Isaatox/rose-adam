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
                                    <h3>Review Details</h3>
                                    <form action="{{ route('store') }}" method="post">
                                        {{ csrf_field() }}
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>Name:</td>
                                                <td><strong>{{ $rose->name }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Description:</td>
                                                <td><strong>{{ $rose->description }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Prix:</td>
                                                <td><strong>{{ $rose->prix }} €</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Recompense:</td>
                                                <td><strong>{{ $rose->recompenses }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>marque:</td>
                                                <td><strong>{{ $rose->marque }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>denomination:</td>
                                                <td><strong>{{ $rose->denomination }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>edition:</td>
                                                <td><strong>{{ $rose->edition }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>type:</td>
                                                <td><strong>{{ $rose->type }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>gamme:</td>
                                                <td><strong>{{ $rose->gamme }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>forme:</td>
                                                <td><strong>{{ $rose->forme }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>couleur:</td>
                                                <td><strong>{{ $rose->couleur }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>largeur_diam:</td>
                                                <td><strong>{{ $rose->largeur_diam }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>nb_petales:</td>
                                                <td><strong>{{ $rose->nb_petales }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>parfum:</td>
                                                <td><strong>{{ $rose->parfum }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>port:</td>
                                                <td><strong>{{ $rose->port }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>vegetation:</td>
                                                <td><strong>{{ $rose->vegetation }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>hauteur_cm:</td>
                                                <td><strong>{{ $rose->hauteur_cm }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>largeur_cm:</td>
                                                <td><strong>{{ $rose->largeur_cm }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>feuillage:</td>
                                                <td><strong>{{ $rose->feuillage }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>maladies:</td>
                                                <td><strong>{{ $rose->maladies }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>inflorescence:</td>
                                                <td><strong>{{ $rose->inflorescence }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>floraison:</td>
                                                <td><strong>{{ $rose->floraison }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Image:</td>
                                                <td><strong><img alt="Rose Image"
                                                            src="/storage/roseImg/{{ $rose->roseimg }}" /></strong>
                                                </td>
                                            </tr>
                                        </table>
                                        <a type="button" href="{{ route('rose.create') }}" class="btn btn-warning">Retourner Étape 1</a>
                                        <a type="button" href="{{ route('rose.create.step.2') }}"
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
