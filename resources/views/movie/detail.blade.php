@extends('layouts.app')

@section('title', $movie['title'])

@section('content')
<div class="container my-5">
    
    
    <div class="mb-4">
        <a href="{{ route('movie.list') }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3 fw-semibold">
            ← Torna alla lista
        </a>
    </div>

    
    <div class="card shadow border-0 rounded-4 overflow-hidden bg-white">
        <div class="row g-0">
            
            
            <div class="col-md-5 col-lg-4 bg-dark">
                <div class="h-100 position-relative" style="aspect-ratio: 2/3; max-height: 550px;">
                    <img src="{{ $movie['img'] }}" 
                         class="w-100 h-100 object-fit-cover shadow" 
                         alt="{{ $movie['title'] }}">
                </div>
            </div>

            
            <div class="col-md-7 col-lg-8 d-flex flex-column justify-content-between p-4 p-md-5">
                <div>
                
                    <h1 class="display-5 fw-bold text-dark mb-3">{{ $movie['title'] }}</h1>
                    
                
                    <div class="bg-primary rounded mb-4" style="width: 50px; height: 4px;"></div>

                    
                    <div class="mb-4">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge bg-light text-dark border p-2 rounded-3 me-3">
                                🎬
                            </span>
                            <div>
                                <small class="text-muted d-block text-uppercase fw-bold small-tracking">Regia</small>
                                <span class="fs-5 text-dark fw-semibold">{{ $movie['director'] }}</span>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <span class="badge bg-light text-dark border p-2 rounded-3 me-3">
                                🏷️
                            </span>
                            <div>
                                <small class="text-muted d-block text-uppercase fw-bold small-tracking">Genere</small>
                                <span class="fs-5 text-dark fw-semibold">{{ $movie['genres'] }}</span>
                            </div>
                        </div>

                        
                        @if(isset($movie['plot']))
                            <div class="mt-4 border-top pt-4">
                                <h5 class="fw-bold text-dark mb-2">Trama</h5>
                                <p class="text-muted lead fs-6 lh-base">{{ $movie['plot'] }}</p>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="mt-4 border-top pt-3 d-flex gap-2">
                    <button class="btn btn-primary fw-bold px-4 py-2 shadow-sm">
                        ▶️ Guarda Trailer
                    </button>
                </div>
            </div>

        </div>
    </div>

</div>

<style>
    .small-tracking {
        font-size: 0.75rem;
        letter-spacing: 1px;
    }
</style>
@endsection
