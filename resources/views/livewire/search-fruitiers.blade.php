<div class="container" style="margin-bottom: 5rem !important; margin-top: 6rem !important">
    <input type="text" class="form-control" style="border-radius: 1rem !important"
        placeholder="Rechercher une variété de Fruitiers ..." wire:model="searchFruitiers" />
    <div class="mb-5"></div>
    <h2>Nos Fruitiers</h2>
    {{ $fruitiers->links('custom-pagination-links-view') }}
    <hr>
    {{ $fruitiers->links() }}
    <div class="row m-0">
        @foreach ($fruitiers as $fruitier)
            <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <img src="/storage/fruitierImg/{{ $fruitier->fruitierimg }}" width="312" height="312"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">{{ $fruitier->variete }}</h3>
                        <p class="card-text">{{ $fruitier->description }}</p>
                        <p class="text-muted">{{ $fruitier->prix }} €</p>

                        <button data-bs-toggle="modal" data-bs-target="#Fruitier{{ $fruitier->id }}"
                            class="btn btn-primary">En savoir
                            plus</button>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="Fruitier{{ $fruitier->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ $fruitier->variete }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="/storage/fruitierImg/{{ $fruitier->fruitierimg }}"
                                            class="card-img-top" alt="...">
                                    </div>
                                    <div class="col-md-5">
                                        <ul>
                                            <li><strong>Rendement :</strong> {{ $fruitier->rendement }}</li>
                                            <li><strong>Sucre :</strong>{{ $fruitier->sucre }}</li>
                                            <li><strong>Acidité :</strong>{{ $fruitier->acidite }}</li>
                                            <li><strong>Couleur :</strong>{{ $fruitier->couleur }}</li>
                                            <li><strong>Parfum :</strong>{{ $fruitier->parfum }}</li>
                                            <li><strong>Hauteur (cm.) : </strong>{{ $fruitier->hauteur_cm }}</li>
                                            <li><strong>Largeur (cm.) : </strong>{{ $fruitier->largeur_cm }}</li>
                                            <li><strong>Résistance aux Maladies : </strong>{{ $fruitier->maladies }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h4 style="color: #e509ec">Description :</h4>
                                        <p>{{ $fruitier->description }}</p>
                                        <div class="row">
                                            <div class="col-8 col-sm-8">
                                                <h4 style="color: #e509ec">Récompenses :</h4>
                                                <p>{{ $fruitier->recompenses }}</p>
                                            </div>
                                            <div class="col-8 col-sm-8">
                                                <h4 style="color: #e509ec">Prix :</h4>
                                                <p>{{ $fruitier->prix }} €</p>
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
