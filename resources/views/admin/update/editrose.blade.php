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
                        <form action="{{ route('admin.roses.edit', ['id' => $rose->id]) }}" method="POST">
                            @csrf
                            <table class="table table-bordered">
                                <tr>
                                    <td>Nom:</td>
                                    <td><strong>
                                            <div class="input-group"><input type="text" name="name"
                                                    class="form-control" placeholder="Entrer nom"
                                                    value="{{ $rose->name }}">
                                                <span class="input-group-text">®</span>
                                            </div>
                                        </strong></td>
                                </tr>
                                <td>denomination:</td>
                                <td><strong><input type="text" name="denomination" id=""
                                            class="form-control mb-2" value="{{ $rose->denomination }}"></strong>
                                </td>
                                </tr>
                                <tr>
                                    <td>Description:</td>
                                    <td>
                                        <textarea name="description" id="editor">{{ $rose->description }}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Prix du rosier :</td>
                                    <td><strong>
                                            <div class="input-group"><input type="number" name="prix"
                                                    class="form-control" min="0" placeholder="Entrer prix"
                                                    value="{{ $rose->prix }}">
                                                <span class="input-group-text">€</span>
                                            </div>
                                        </strong></td>
                                </tr>
                                <tr>
                                    <td>Recompense(s) :</td>
                                    <td><strong><input type="text" name="recompenses" id=""
                                                class="form-control mb-2" value="{{ $rose->recompenses }}"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Catégorie:</td>
                                    <td><strong>
                                            <select name="categorie" id="" class="form-control mb-2">
                                                <option value="Rosier Noble"
                                                    {{ $rose->categorie == 'Rosier Noble' ? 'selected' : '' }}>
                                                    Rosier Noble</option>
                                                <option value="Rosier a fleurs groupées"
                                                    {{ $rose->categorie == 'Rosier a fleurs groupées' ? 'selected' : '' }}>
                                                    Rosier a fleurs groupées</option>
                                                <option value="Rosier Paysager"
                                                    {{ $rose->categorie == 'Rosier Paysager' ? 'selected' : '' }}>
                                                    Rosier Paysager</option>
                                                <option value="Rosier Grimpant"
                                                    {{ $rose->categorie == 'Rosier Grimpant' ? 'selected' : '' }}>
                                                    Rosier Grimpant</option>
                                            </select>
                                        </strong></td>
                                </tr>
                                <tr>
                                    <td>Rosier parfumé:</td>
                                    <td><strong>
                                            <div class="form-control">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="parfume"
                                                        id="parfume" value="Oui"
                                                        {{ $rose->parfume == 'Oui' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="parfume">Oui</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="parfume"
                                                        id="parfume" value="Non"
                                                        {{ $rose->parfume == 'Non' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="parfume">Non</label>
                                                </div>
                                            </div>
                                        </strong></td>
                                </tr>
                                <tr>
                                    <td>Rosier Tige:</td>
                                    <td><strong>
                                            <div class="form-control">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="tige"
                                                        id="tige" value="Oui"
                                                        {{ $rose->tige == 'Oui' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="tige">Oui</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="tige"
                                                        id="tige" value="Non"
                                                        {{ $rose->tige == 'Non' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="tige">Non</label>
                                                </div>
                                            </div>
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
