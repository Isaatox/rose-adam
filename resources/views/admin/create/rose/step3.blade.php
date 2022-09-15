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
                                    <div class="row">
                                        <div class="col-md-10">
                                            <h5>Detail Rose</h5>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="{{ route('rose.create.step.2') }}"
                                                class="btn btn-md btn-success float-right"><i
                                                    class="fas fa-arrow-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3>Étape 3</h3>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <hr>
                                    @if (isset($rose->roseimg))
                                        <img alt="Rose Image" src="/storage/roseimg/{{ $rose->roseimg }}" />
                                    @endif
                                    <form action="{{ route('rose.post.step.3') }}" method="post"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label for="name">Télécharger Image: </label>
                                            <input type="file" {{ !empty($rose->roseimg) ? 'disabled' : '' }}
                                                class="form-control-file" name="roseimg" id="roseimg"
                                                aria-describedby="fileHelp">
                                            <small id="fileHelp" class="form-text text-muted">Merci de mettre une image
                                                avec une bonne extension <strong>(jpeg,png,jpg,gif,svg)</strong>. La
                                                taille de l'image ne doit passer 2mb.</small>
                                        </div>
                                        <a type="button" href="{{ route('rose.create.step.2') }}"
                                            class="btn btn-warning">Retourner Étape 2</a>
                                        <button type="submit" class="btn btn-primary">Voir les détails</button>
                                    </form><br />
                                </div>
                            </div>
                        </div>
                        @if (!isset($rose->productImg))
                            <form action="{{ route('remove.image') }}" method="post">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger">Supprimer Image</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
