<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roses Adam Administration fruitier') }}
        </h2>
    </x-slot>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/datatables.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.css') }}" />

    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                    @endif

                    <span class="d-flex" style="justify-content: flex-end">
                        <x-button class="btn btn-success" onclick="location.href='{{ route('fruitier.create') }}'">
                            {{ __('Ajouter un fruitier') }}
                        </x-button>
                    </span>
                    <br><br>
                    <table id="myTable" class="display">
                        <thead>
                            <th>Variete du fruitier</th>
                            <th>Description du fruitier</th>
                            <th>Prix</th>
                            <th>Créé le</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @foreach ($fruitiers as $fruitier)
                                <tr>
                                    <td>{{ $fruitier->variete }}</td>
                                    <td>{{ $fruitier->description }}</td>
                                    <td>{{ $fruitier->prix }} €</td>
                                    <td>{{ $fruitier->created_at->format('d/m/Y à H:i') }}</td>
                                    <td>
                                        <a class="btn btn-outline-success"
                                            href="{{ route('admin.fruitier.edit.view', ['id' => $fruitier->id]) }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button type="button" class="btn btn-outline-danger" onclick="myFunction()"><i
                                                class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                                <script>
                                    function myFunction() {
                                        let text;
                                        if (confirm("Appuyer sur OK pour confirmer !") == true) {
                                            location.href = "{{ route('admin.fruitier.delete', ['id' => $fruitier->id]) }}";
                                        } else {
                                            text = "Anulation de la suppression!";
                                        }
                                        document.getElementById("demo").innerHTML = text;
                                    }
                                </script>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                "pagingType": "full_numbers",
                "lengthChange": true,
                language: {
                    processing: "Traitement en cours...",
                    search: "Rechercher&nbsp;:",
                    lengthMenu: "Afficher _MENU_ &eacute;l&eacute;ments",
                    info: "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                    infoEmpty: "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                    infoFiltered: "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                    infoPostFix: "",
                    loadingRecords: "Chargement en cours...",
                    zeroRecords: "Aucun &eacute;l&eacute;ment &agrave; afficher",
                    emptyTable: "Aucune donnée disponible dans le tableau",
                    paginate: {
                        first: "Premier",
                        previous: "Pr&eacute;c&eacute;dent",
                        next: "Suivant",
                        last: "Dernier"
                    },
                    aria: {
                        sortAscending: ": activer pour trier la colonne par ordre croissant",
                        sortDescending: ": activer pour trier la colonne par ordre décroissant"
                    }
                }
            });
        });
    </script>
</x-app-layout>
