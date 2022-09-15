<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roses Adam Administration Fruitier') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.css') }}" />
    <script src="{{ url('assets/js/ckeditor.js') }}"></script>
    <style>
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 200px;
        }
    </style>
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
                                            <a href="{{ route('fruitier') }}"
                                                class="btn btn-md btn-success float-right"><i
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
                                        <label>Nom du fruitier: </label>
                                        <div class="input-group mb-2">
                                            <input type="text" name="variete" class="form-control"
                                                placeholder="Entrer nom" value="{{ session()->get('fruitier.variete') }}">
                                            <span class="input-group-text">®</span>
                                        </div>
                                        
                                        <label>Prix du fruitier: </label>
                                        <div class="input-group mb-2">
                                            <input type="number" name="prix" class="form-control" min="0"
                                                placeholder="Enter prix" value="{{ session()->get('fruitier.prix') }}">
                                            <span class="input-group-text">€</span>
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
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-app-layout>
