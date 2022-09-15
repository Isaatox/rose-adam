<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roses Adam Administration') }}
        </h2>
        <style>
            .order-card {
                color: #fff;
            }

            .bg-c-blue {
                background: linear-gradient(45deg, #4099ff, #73b4ff);
            }

            .bg-c-green {
                background: linear-gradient(45deg, #2ed8b6, #59e0c5);
            }

            .bg-c-yellow {
                background: linear-gradient(45deg, #FFB64D, #ffcb80);
            }

            .bg-c-pink {
                background: linear-gradient(45deg, #FF5370, #ff869a);
            }


            .card {
                border-radius: 5px;
                -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
                box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
                border: none;
                margin-bottom: 30px;
                -webkit-transition: all 0.3s ease-in-out;
                transition: all 0.3s ease-in-out;
            }

            .card .card-block {
                padding: 25px;
            }

            .order-card i {
                font-size: 26px;
            }

            .f-left {
                float: left;
            }

            .f-right {
                float: right;
            }
        </style>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="col-md-4 col-xl-3">
                            <div class="card bg-c-blue order-card">
                                <div class="card-block">
                                    <h4 class="m-b-20"><strong>Total de mail reçu sous les 30 derniers jours</strong>
                                    </h4>
                                    <h2 class="text-right"><i
                                            class="fas fa-envelope"></i>&nbsp;<span>{{ $nbmail }}</span></h2>
                                            <span class="f-right">
                                                <x-button class=""
                                                    onclick="location.href='{{ route('mail') }}'"> {{ __('En savoir plus') }}
                                                </x-button>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3">
                            <div class="card bg-c-yellow order-card">
                                <div class="card-block">
                                    <h6 class="m-b-20"><strong>Total de fruitier</strong></h6>
                                    <h2 class="text-right"><i class="fas fa-apple-alt"></i>&nbsp;<span>{{$nbfruitiers}}</span></h2>
                                    <span class="f-right">
                                        <x-button class=""
                                            onclick="location.href='{{ route('fruitier') }}'"> {{ __('En savoir plus') }}
                                        </x-button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xl-3">
                            <div class="card bg-c-pink order-card">
                                <div class="card-block">
                                    <h6 class="m-b-20"><strong>Total de roses</strong></h6>
                                    <h2 class="text-right"><i class="fas fa-seedling"></i>&nbsp;<span>{{ $nbroses }}</span></h2>
                                    <span class="f-right">
                                        <x-button class=""
                                            onclick="location.href='{{ route('roses') }}'"> {{ __('En savoir plus') }}
                                        </x-button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
