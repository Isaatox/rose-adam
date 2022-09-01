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
                                    <td><strong><input type="text" name="variete" id=""
                                                value="{{ $fruitier->variete }}" class="form-control mb-2"></strong></td>
                                </tr>
                                <tr>
                                    <td>Description:</td>
                                    <td><strong>
                                            <textarea name="description" id="" cols="100" rows="5" class="form-control mb-2">{{ $fruitier->description }}</textarea>
                                        </strong></td>
                                </tr>
                                <tr>
                                    <td>Prix :</td>
                                    <td><strong><input type="text" name="prix" id=""
                                                class="form-control mb-2" value="{{ $fruitier->prix }}"> €</strong></td>
                                </tr>
                                <tr>
                                    <td>Recompense:</td>
                                    <td><strong><input type="text" name="recompenses" id=""
                                                class="form-control mb-2" value="{{ $fruitier->recompenses }}"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rendement :</td>
                                    <td><strong><input type="text" name="rendement" id=""
                                                class="form-control mb-2" value="{{ $fruitier->rendement }}"></strong></td>
                                </tr>
                                <tr>
                                    <td>Sucre :</td>
                                    <td><strong><input type="text" name="sucre" id=""
                                                class="form-control mb-2" value="{{ $fruitier->sucre }}"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Acidité :</td>
                                    <td><strong><input type="text" name="acidite" id=""
                                                class="form-control mb-2" value="{{ $fruitier->acidite }}"></strong></td>
                                </tr>
                                <tr>
                                    <td>couleur:</td>
                                    <td><strong><input type="text" name="couleur" id=""
                                                class="form-control mb-2" value="{{ $fruitier->couleur }}"></strong></td>
                                </tr>
                                <tr>
                                    <td>parfum:</td>
                                    <td><strong>
                                            <select name="parfum" id="" class="form-control mb-2">
                                                <option value="Faible"
                                                    {{ $fruitier->parfum == 'Faible' ? 'selected' : '' }}>
                                                    Faible</option>
                                                <option value="Moyen"
                                                    {{ $fruitier->parfum == 'Moyen' ? 'selected' : '' }}>
                                                    Moyen</option>
                                                <option value="Fort" {{ $fruitier->parfum == 'Fort' ? 'selected' : '' }}>
                                                    Fort</option>
                                            </select>
                                        </strong></td>
                                </tr>
                                <tr>
                                    <td>hauteur_cm:</td>
                                    <td><strong><input type="text" name="hauteur_cm" id=""
                                                class="form-control mb-2" value="{{ $fruitier->hauteur_cm }}"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>largeur_cm:</td>
                                    <td><strong><input type="text" name="largeur_cm" id=""
                                                class="form-control mb-2" value="{{ $fruitier->largeur_cm }}"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>maladies:</td>
                                    <td><strong><select name="maladies" id="" class="form-control mb-2">
                                                <option value="Faible"
                                                    {{ $fruitier->maladies == 'Faible' ? 'selected' : '' }}>
                                                    Faible</option>
                                                <option value="Moyen"
                                                    {{ $fruitier->maladies == 'Moyen' ? 'selected' : '' }}>
                                                    Moyen</option>
                                                <option value="Fort"
                                                    {{ $fruitier->maladies == 'Fort' ? 'selected' : '' }}>
                                                    Fort</option>
                                            </select></strong></td>
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

</x-app-layout>
