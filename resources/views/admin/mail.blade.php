<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roses Adam Administration Mail') }}
        </h2>
    </x-slot>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/datatables.css') }}" />
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table id="myTable" class="display">
                        <thead>
                            <th>Nom Prenom</th>
                            <th>E-mail</th>
                            <th>Téléphone</th>
                            <th>Sujet</th>
                            <th>Message</th>
                            <th>Créée le</th>
                        </thead>
                        <tbody>
                            @foreach ($mails as $mail)
                                <tr>
                                    <td>{{$mail->name}}</td>
                                    <td>{{$mail->email}}</td>
                                    <td>{{$mail->phone}}</td>
                                    <td>{{$mail->subject}}</td>
                                    <td>{{$mail->message}}</td>
                                    <td>{{$mail->created_at->format('d/m/Y à H:i')}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <p class="text-gray-500">Tous les mails sont supprimés de la base de données au bout de 30 jours</p>
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

