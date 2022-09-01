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
                                    <td>Name:</td>
                                    <td><strong><input type="text" name="name" id=""
                                                value="{{ $rose->name }}" class="form-control mb-2"></strong></td>
                                </tr>
                                <tr>
                                    <td>Description:</td>
                                    <td><strong>
                                            <textarea name="description" id="" cols="100" rows="5" class="form-control mb-2">{{ $rose->description }}</textarea>
                                        </strong></td>
                                </tr>
                                <tr>
                                    <td>Prix:</td>
                                    <td><strong><input type="text" name="prix" id=""
                                                class="form-control mb-2" value="{{ $rose->prix }}"> €</strong></td>
                                </tr>
                                <tr>
                                    <td>Recompense:</td>
                                    <td><strong><input type="text" name="recompenses" id=""
                                                class="form-control mb-2" value="{{ $rose->recompenses }}"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>marque:</td>
                                    <td><strong><input type="text" name="marque" id=""
                                                class="form-control mb-2" value="{{ $rose->marque }}"></strong></td>
                                </tr>
                                <tr>
                                    <td>denomination:</td>
                                    <td><strong><input type="text" name="denomination" id=""
                                                class="form-control mb-2" value="{{ $rose->denomination }}"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>edition:</td>
                                    <td><strong><input type="text" name="edition" id=""
                                                class="form-control mb-2" value="{{ $rose->edition }}"></strong></td>
                                </tr>
                                <tr>
                                    <td>type:</td>
                                    <td><strong><input type="text" name="type" id=""
                                                class="form-control mb-2" value="{{ $rose->type }}"></strong></td>
                                </tr>
                                <tr>
                                    <td>gamme:</td>
                                    <td><strong><input type="text" name="gamme" id=""
                                                class="form-control mb-2" value="{{ $rose->gamme }}"></strong></td>
                                </tr>
                                <tr>
                                    <td>forme:</td>
                                    <td><strong><input type="text" name="forme" id=""
                                                class="form-control mb-2" value="{{ $rose->forme }}"></strong></td>
                                </tr>
                                <tr>
                                    <td>couleur:</td>
                                    <td><strong><input type="text" name="couleur" id=""
                                                class="form-control mb-2" value="{{ $rose->couleur }}"></strong></td>
                                </tr>
                                <tr>
                                    <td>largeur_diam:</td>
                                    <td><strong><input type="text" name="largeur_diam" id=""
                                                class="form-control mb-2" value="{{ $rose->largeur_diam }}"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>nb_petales:</td>
                                    <td><strong><input type="text" name="nb_petales" id=""
                                                class="form-control mb-2" value="{{ $rose->nb_petales }}"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>parfum:</td>
                                    <td><strong>
                                            <select name="parfum" id="" class="form-control mb-2">
                                                <option value="Faible"
                                                    {{ $rose->parfum == 'Faible' ? 'selected' : '' }}>
                                                    Faible</option>
                                                <option value="Moyen"
                                                    {{ $rose->parfum == 'Moyen' ? 'selected' : '' }}>
                                                    Moyen</option>
                                                <option value="Fort" {{ $rose->parfum == 'Fort' ? 'selected' : '' }}>
                                                    Fort</option>
                                            </select>
                                        </strong></td>
                                </tr>
                                <tr>
                                    <td>port:</td>
                                    <td><strong><input type="text" name="port" id=""
                                                class="form-control mb-2" value="{{ $rose->port }}"></strong></td>
                                </tr>
                                <tr>
                                    <td>vegetation:</td>
                                    <td><strong><input type="text" name="vegetation" id=""
                                                class="form-control mb-2" value="{{ $rose->vegetation }}"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>hauteur_cm:</td>
                                    <td><strong><input type="text" name="hauteur_cm" id=""
                                                class="form-control mb-2" value="{{ $rose->hauteur_cm }}"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>largeur_cm:</td>
                                    <td><strong><input type="text" name="largeur_cm" id=""
                                                class="form-control mb-2" value="{{ $rose->largeur_cm }}"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>feuillage:</td>
                                    <td><strong><input type="text" name="feuillage" id=""
                                                class="form-control mb-2" value="{{ $rose->feuillage }}"></strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>maladies:</td>
                                    <td><strong><select name="maladies" id="" class="form-control mb-2">
                                                <option value="Faible"
                                                    {{ $rose->maladies == 'Faible' ? 'selected' : '' }}>
                                                    Faible</option>
                                                <option value="Moyen"
                                                    {{ $rose->maladies == 'Moyen' ? 'selected' : '' }}>
                                                    Moyen</option>
                                                <option value="Fort"
                                                    {{ $rose->maladies == 'Fort' ? 'selected' : '' }}>
                                                    Fort</option>
                                            </select></strong></td>
                                </tr>
                                <tr>
                                    <td>inflorescence:</td>
                                    <td><strong><input type="text" name="inflorescence" id=""
                                                class="form-control mb-2"
                                                value="{{ $rose->inflorescence }}"></strong></td>
                                </tr>
                                <tr>
                                    <td>floraison:</td>
                                    <td><strong><input type="text" name="floraison" id=""
                                                class="form-control mb-2" value="{{ $rose->floraison }}"></strong>
                                    </td>
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
