@extends('layouts.app')

@section('title', 'Lista Film')

@section('content')
<div class="container my-5">
    
    
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold text-primary">Catalogo Film 🎬</h1>
<p class="text-secondary lead">Esplora la nostra collezione...</p>
<div class="mx-auto bg-primary rounded" style="width: 60px; height: 4px;"></div>

    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach($movies as $movie)
            <div class="col">
        
                <div class="card shadow border-0 rounded-3 h-100 movie-card transition-all">
                    
                    
                    <div class="position-relative overflow-hidden rounded-top-3" style="aspect-ratio: 2/3; background-color: #222;">
                        <img src="{{ $movie['img'] }}" 
                             class="w-100 h-100 object-fit-cover movie-poster" 
                             alt="{{ $movie['title'] }}"
                             loading="lazy">
                        
                        
                        @if(isset($movie['year']))
                            <span class="position-absolute top-0 end-0 bg-dark text-white bg-opacity-75 m-2 px-2 py-1 rounded small fw-bold">
                                {{ $movie['year'] }}
                            </span>
                        @endif
                    </div>

                    
                    <div class="card-body d-flex flex-column p-4">
                        <h5 class="card-title fw-bold text-dark mb-1 text-truncate-2" title="{{ $movie['title'] }}">
                           
                        </h5>
                        
                        <p class="card-text text-muted small mb-4">
                            <i class="bi bi-person-video2 me-1"></i>Regia: <span class="fw-semibold">{{ $movie['director'] }}</span>
                        </p>

                    
                        <a href="{{ route('movie.detail', $movie['id']) }}" class="btn btn-outline-primary w-100 fw-bold mt-auto shadow-sm">
                            Vedi Dettagli
                        </a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
</div>

{{-- Stile CSS personalizzato (puoi lasciarlo qui in fondo o spostarlo nel tuo app.css) --}}
<style>
    .movie-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .movie-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175) !important;
    }
    .movie-poster {
        transition: transform 0.5s ease;
    }
    .movie-card:hover .movie-poster {
        transform: scale(1.05);
    }
    /* Tronca il testo dopo 2 righe per non sballare le altezze se il titolo è lunghissimo */
    .text-truncate-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endsection
