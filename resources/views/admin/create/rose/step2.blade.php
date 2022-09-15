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
                                        <div class="form-group mb-2">
                                            <label for="name">Description de la rose: </label>
                                            <textarea name="description" id="editor">{{ session()->get('rose.description') }}</textarea>

                                        </div>
                                        <div class="form-group">
                                            <label for="name">Récompense de la rose: </label>
                                            <input type="text" name="recompenses" class="form-control mb-2"
                                                placeholder="Enter recompenses"
                                                value="{{ session()->get('rose.recompenses') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="categorie">Catégorie de la rose: </label>
                                            <select name="categorie" id="" class="form-control mb-2">
                                                {{-- <option value="{{ session()->get('rose.parfum') }}" selected></option> --}}
                                                <option value="Rosier Noble">Rosier Noble</option>
                                                <option value="Rosier a fleurs groupées">Rosier à fleurs groupées</option>
                                                <option value="Rosier Paysager">Rosier Paysager</option>
                                                <option value="Rosier Grimpant">Rosier Grimpant</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="parfume">Rosier parfumé : </label>
                                            <div class="form-control">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="parfume" id="parfume" value="Oui">
                                                    <label class="form-check-label" for="parfume">Oui</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="parfume" id="parfume" value="Non">
                                                    <label class="form-check-label" for="parfume">Non</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="Tige">Rosier Tige : </label>
                                            <div class="form-control">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="tige" id="tige" value="Oui">
                                                    <label class="form-check-label" for="tige">Oui</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="tige" id="tige" value="Non">
                                                    <label class="form-check-label" for="tige">Non</label>
                                                </div>
                                            </div>
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
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-app-layout>

