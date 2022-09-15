<div class="container" style="margin-bottom: 5rem !important; margin-top: 6rem !important">
    <input type="text" class="form-control" style="border-radius: 1rem !important"
        placeholder="Rechercher une variété de Amandiers ..." wire:model="searchFruitiers" />
    <div class="mb-5 mt-5">
        <a href="/fruitier/abricotiers" class="btn btn-primary mt-2">Nos Abricotiers</a>
        <a href="/fruitier/amandiers" class="btn btn-info mt-2">Nos Amandiers</a>
        <a href="/fruitier/cerisiers" class="btn btn-primary mt-2">Nos Cerisiers</a>
        <a href="/fruitier/pechers" class="btn btn-primary mt-2">Nos Pêchers</a>
        <a href="/fruitier/poiriers" class="btn btn-primary mt-2">Nos Poiriers</a>
        <a href="/fruitier/pruniers" class="btn btn-primary mt-2">Nos Pruniers</a>
        <a href="/fruitier/pommiers" class="btn btn-success mt-2">Nos Pommiers</a>
        <a href="/fruitier/pommiers-à-cidre" class="btn btn-success mt-2">Nos Pommiers à cidre</a>
        <a href="/fruitier" class="btn btn-warning mt-2">Toutes nos variétées</a>
    </div>
    <h2>Nos Amandiers</h2>
    {{ $fruitiers->links('custom-pagination-links-view') }}
    <hr>
    {{ $fruitiers->links() }}
    <div class="row m-0">
        @foreach ($fruitiers as $fruitier)
            <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/fruitierimg/' . $fruitier->fruitierimg) }}" width="312"
                        height="312" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">{{ $fruitier->variete }} ®</h3>
                        <p class="text-muted"><strong>{{ $fruitier->prix }} €</strong></p>

                        <button data-bs-toggle="modal" data-bs-target="#Fruitier{{ $fruitier->id }}"
                            class="btn btn-secondary">En savoir
                            plus</button>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="Fruitier{{ $fruitier->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ $fruitier->variete }} ®</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="/storage/fruitierimg/{{ $fruitier->fruitierimg }}"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="col-md-5">
                                        <ul>
                                            <li><strong>Nom :</strong> {{ $fruitier->variete }} ®</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h4 style="color: #e509ec">Description :</h4>
                                        <p>{!! html_entity_decode($fruitier->description) !!}</p>
                                        <div class="row">
                                            <div class="col-8 col-sm-8">
                                                <h4 style="color: #e509ec">Prix :</h4>
                                                <p><strong>{{ $fruitier->prix }} €</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $fruitiers->links() }}
    </div>
</div>
