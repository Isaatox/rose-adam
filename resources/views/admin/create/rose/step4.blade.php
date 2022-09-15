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
                                                <td>denomination:</td>
                                                <td><strong>{{ $rose->denomination }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Description:</td>
                                                <td><strong>{!! html_entity_decode($rose->description) !!}</strong></td>
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
                                                <td>Catégorie du rosier:</td>
                                                <td><strong>{{ $rose->categorie }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Rosier Parfumé:</td>
                                                <td><strong>{{ $rose->parfume }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Rosier tige :</td>
                                                <td><strong>{{ $rose->tige }}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Image:</td>
                                                <td><strong><img alt="Rose Image"
                                                            src="/storage/roseimg/{{ $rose->roseimg }}" /></strong>
                                                </td>
                                            </tr>
                                        </table>
                                        <a type="button" href="{{ route('rose.create') }}"
                                            class="btn btn-warning">Retourner Étape 1</a>
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
