<div class="container" style="margin-bottom: 5rem !important; margin-top: 6rem !important">
    <input type="text" class="form-control" style="border-radius: 1rem !important"
        placeholder="Rechercher une variété de Rose ..." wire:model="searchRoses" />
    <div class="mb-5"></div>
    <h2>Nos Roses</h2>
    {{ $roses->links('custom-pagination-links-view') }}
    <hr>
    {{ $roses->links() }}

    <div class="row m-0">
        @foreach ($roses as $rose)
            <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <img src="/storage/roseImg/{{ $rose->roseimg }}" width="312" height="312" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h3 class="card-title">{{ $rose->name }}</h3>
                        <p class="card-text">{{ $rose->description }}</p>
                        <p class="text-muted">{{ $rose->prix }} €</p>

                        <button data-bs-toggle="modal" data-bs-target="#Roses{{ $rose->id }}"
                            class="btn btn-primary">En savoir
                            plus</button>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="Roses{{ $rose->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ $rose->name }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="/storage/roseImg/{{ $rose->roseimg }}" class="card-img-top"
                                            alt="...">
                                    </div>
                                    <div class="col-md-5">
                                        <ul>
                                            <li><strong>MARQUE :</strong> {{ $rose->marque }}</li>
                                            <li><strong>Dénomination Variétale :</strong>{{ $rose->denomination }}</li>
                                            <li><strong>ÉDITION :</strong>{{ $rose->edition }}</li>
                                            <li><strong>Type :</strong>{{ $rose->type }}</li>
                                            <li><strong>Gamme :</strong>{{ $rose->gamme }}</li>
                                            <li><strong>Forme :</strong>{{ $rose->forme }}</li>
                                            <li><strong>Couleur :</strong>{{ $rose->couleur }}</li>
                                            <li><strong>Largeur de la Fleur ø cm :</strong>{{ $rose->largeur_diam }}
                                            </li>
                                            <li><strong>N. de Pétales :</strong>{{ $rose->nb_petales }}</li>
                                            <li><strong>Parfum :</strong>{{ $rose->parfum }}</li>
                                            <li><strong>Port :</strong>{{ $rose->port }}</li>
                                            <li><strong>Végétation :</strong>{{ $rose->vegetation }}</li>
                                            <li><strong>Hauteur (cm.) :</strong>{{ $rose->denomination }}</li>
                                            <li><strong>Largeur (cm.) :</strong>{{ $rose->denomination }}</li>
                                            <li><strong>Feuillage :</strong>{{ $rose->denomination }}</li>
                                            <li><strong>Résistance aux Maladies :</strong>{{ $rose->denomination }}
                                            </li>
                                            <li><strong>Inflorescence :</strong>{{ $rose->denomination }}</li>
                                            <li><strong>Floraison :</strong>{{ $rose->denomination }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h4 style="color: #e509ec">Description :</h4>
                                        <p>{{ $rose->description }}</p>
                                        <div class="row">
                                            <div class="col-8 col-sm-8">
                                                <h4 style="color: #e509ec">Récompenses :</h4>
                                                <p>{{ $rose->recompenses }}</p>
                                            </div>
                                            <div class="col-8 col-sm-8">
                                                <h4 style="color: #e509ec">Prix :</h4>
                                                <p>{{ $rose->prix }} €</p>
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
        {{ $roses->links() }}

    </div>
</div>
