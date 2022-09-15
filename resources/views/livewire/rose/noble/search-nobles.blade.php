<div class="container" style="margin-bottom: 5rem !important; margin-top: 6rem !important">
    <input type="text" class="form-control" style="border-radius: 1rem !important"
        placeholder="Rechercher une variété de Roses Nobles ..." wire:model="searchRoses" />
    <div class="mb-5 mt-5">
        <a href="/roses/nobles-parfumés" class="btn btn-primary mt-2">Nos Rosiers Nobles très parfumés</a>
        <a href="/roses/nobles" class="btn btn-info mt-2">Nos Rosiers Nobles</a>
        <a href="/roses/fleurs-groupées" class="btn btn-primary mt-2">Nos Rosiers à fleurs groupées</a>
        <a href="/roses/grimpants" class="btn btn-primary mt-2">Nos Rosiers Grimpants</a>
        <a href="/roses/paysagers" class="btn btn-primary mt-2">Nos Rosiers Paysagers</a>
        <a href="/roses/parfumés" class="btn btn-success mt-2">Nos Rosiers Parfumés</a>
        <a href="/roses/tiges" class="btn btn-success mt-2">Nos Rosiers Tiges</a>
        <a href="/roses" class="btn btn-warning mt-2">Toutes nos variétées</a>
    </div>
    <h2>Nos Roses Nobles</h2>
    {{ $roses->links('custom-pagination-links-view') }}
    <hr>
    {{ $roses->links() }}

    <div class="row m-0">
        @foreach ($roses as $rose)
            <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
                <div class="card">
                    <img src="/storage/roseimg/{{ $rose->roseimg }}" width="312" height="312" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h3 class="card-title">{{ $rose->name }} ®</h3>
                        <p class="text-muted"><strong>{{ $rose->prix }} €</strong></p>

                        <button data-bs-toggle="modal" data-bs-target="#Roses{{ $rose->id }}"
                            class="btn btn-secondary">En savoir
                            plus</button>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="Roses{{ $rose->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ $rose->name }} ®</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="/storage/roseimg/{{ $rose->roseimg }}" class="card-img-top"
                                            alt="...">
                                    </div>
                                    <div class="col-md-5">
                                        <ul>
                                            <li><strong>Nom :</strong> {{ $rose->name }} ®</li>
                                            <li><strong>Dénomination Variétale :</strong>{{ $rose->denomination }}</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <h4 style="color: #e509ec">Description :</h4>
                                        <p>{!! html_entity_decode($rose->description) !!}</p>
                                        <div class="row">
                                            <div class="col-8 col-sm-8">
                                                <h4 style="color: #e509ec">Récompenses :</h4>
                                                <p>{{ $rose->recompenses }}</p>
                                            </div>
                                            <div class="col-8 col-sm-8">
                                                <h4 style="color: #e509ec">Prix :</h4>
                                                <p><strong>{{ $rose->prix }} €</strong></p>
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
