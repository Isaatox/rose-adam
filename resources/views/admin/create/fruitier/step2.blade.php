<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roses Adam Administration') }}
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
                                        <div class="form-group mb-2">
                                            <label for="name">Description du fruitier: </label>
                                            <textarea name="description" id="editor">{{ session()->get('fruitier.description') }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Récompense du fruitier: </label>
                                            <input type="text" name="recompenses" class="form-control mb-2"
                                                placeholder="Enter recompenses"
                                                value="{{ session()->get('fruitier.recompenses') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="categorie">Catégorie du fruitier: </label>
                                            <select name="categorie" id="" class="form-control mb-2">
                                                {{-- <option value="{{ session()->get('rose.parfum') }}" selected></option> --}}
                                                <option value="Pommier">Pommier</option>
                                                <option value="Pommier à cidre">Pommier à cidre</option>
                                                <option value="Poirier">Poirier</option>
                                                <option value="Pêcher">Pêcher</option>
                                                <option value="Cerisier">Cerisier</option>
                                                <option value="Prunier">Prunier</option>
                                                <option value="Abricotier">Abricotier</option>
                                                <option value="Amandier">Amandier</option>

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
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-app-layout>
