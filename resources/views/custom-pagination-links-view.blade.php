@if ($paginator->hasPages())
    <nav class="d-flex justify-items-center justify-content-between">
        <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
            <div>
                <p class="small text-muted">
                    {!! __('Voir') !!}
                    {{-- <span class="fw-semibold">{{ $paginator->firstItem() }}</span> --}}
                    {{-- {!! __('à') !!}
                    <span class="fw-semibold">{{ $paginator->lastItem() }}</span> --}}
                    {{-- {!! __('sur') !!} --}}
                    <span class="fw-semibold">{{ $paginator->total() }}</span>
                    {!! __('résultats') !!}
                </p>
            </div>
        </div>
    </nav>
@endif
