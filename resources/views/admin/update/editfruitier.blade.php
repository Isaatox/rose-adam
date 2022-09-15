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
                    <div class="container mt-5">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('admin.fruitier.edit', ['id' => $fruitier->id]) }}" method="POST">
                            @csrf
                            <table class="table table-bordered">
                                <tr>
                                    <td>Varieté :</td>
                                    <td><strong>
                                            <div class="input-group">
                                                <input type="text" name="variete" class="form-control"
                                                    placeholder="Entrer nom" value="{{ $fruitier->variete }}">
                                                <span class="input-group-text">®</span>
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Prix :</td>
                                    <td><strong>
                                            <div class="input-group mb-2">
                                                <input type="number" name="prix" class="form-control" min="0"
                                                    placeholder="Enter prix" value="{{ $fruitier->prix }}">
                                                <span class="input-group-text">€</span>
                                            </div>
                                        </strong></td>
                                </tr>
                                <tr>
                                    <td>Description:</td>
                                    <td>
                                            <textarea name="description" id="editor">{{ $fruitier->description }}</textarea>
                                        </td>
                                </tr>
                                <tr>
                                    <td>Recompense:</td>
                                    <td><strong><input type="text" name="recompenses" id=""
                                                class="form-control mb-2" value="{{ $fruitier->recompenses }}"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Catégorie :</td>
                                    <td><strong>
                                            <select name="categorie" id="" class="form-control mb-2">
                                                <option value="Pommier"
                                                    {{ $fruitier->categorie == 'Pommier' ? 'selected' : '' }}>
                                                    Pommier</option>
                                                <option value="Pommier à cidre"
                                                    {{ $fruitier->categorie == 'Pommier à cidre' ? 'selected' : '' }}>
                                                    Pommier à cidre</option>
                                                <option value="Poirier"
                                                    {{ $fruitier->categorie == 'Poirier' ? 'selected' : '' }}>
                                                    Poirier</option>
                                                <option value="Pêcher"
                                                    {{ $fruitier->categorie == 'Pêcher' ? 'selected' : '' }}>
                                                    Pêcher</option>
                                                <option value="Cerisier"
                                                    {{ $fruitier->categorie == 'Cerisier' ? 'selected' : '' }}>
                                                    Cerisier</option>
                                                <option value="Prunier"
                                                    {{ $fruitier->categorie == 'Prunier' ? 'selected' : '' }}>
                                                    Prunier</option>
                                                <option value="Abricotier"
                                                    {{ $fruitier->categorie == 'Abricotier' ? 'selected' : '' }}>
                                                    Abricotier</option>
                                                <option value="Amandier"
                                                    {{ $fruitier->categorie == 'Amandier' ? 'selected' : '' }}>
                                                    Amandier</option>
                                            </select>
                                        </strong></td>
                                </tr>
                            </table>

                            <button type="submit" class="btn btn-primary">Modifer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</x-app-layout>
