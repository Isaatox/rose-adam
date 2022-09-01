<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roses Adam Administration Fruitier') }}
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
                                            <a href="{{ route('fruitier') }}" class="btn btn-md btn-success float-right"><i
                                                    class="fas fa-arrow-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3>Étape 1</h3>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{ route('fruitier.post.step.1') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="variete">Variété du fruitier: </label>
                                            <input type="text" name="variete" class="form-control mb-2"
                                                placeholder="Entrer variete" value="{{ session()->get('fruitier.variete') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Description du fruitier: </label>
                                            <input type="text" name="description" class="form-control mb-2"
                                                placeholder="Entrer description" value="{{ session()->get('fruitier.description') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Récompense du fruitier: </label>
                                            <input type="text" name="recompenses" class="form-control mb-2"
                                                placeholder="Enter recompenses" value="{{ session()->get('fruitier.recompenses') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Prix du fruitier: </label>
                                            <input type="text" name="prix" class="form-control mb-2"
                                                placeholder="Enter prix" value="{{ session()->get('fruitier.prix') }}">
                                        </div>
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
