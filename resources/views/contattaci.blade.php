@extends('layouts.app')

@section('title', 'Contattaci')

@section('content')
<div class="row justify-content-center py-5">
    <div class="col-md-8 col-lg-6">
        
        
        <div class="card shadow border-0 rounded-3">
            <div class="card-body p-4 p-sm-5">
                <h1 class="card-title text-center fw-bold text-primary mb-4">Contattaci ✉️</h1>

                <p class="text-muted text-center mb-4">Compila il modulo sottostante, ti risponderemo il prima possibile.</p>

                
                <form action="{{ route('contactUs.send') }}" method="POST">
                    @csrf

                    
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nome</label>
                        <input type="text" 
                               name="name" 
                               class="form-control @error('name') is-invalid @enderror" 
                               value="{{ old('name') }}" 
                               required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Email</label>
                        <input type="email" 
                               name="email" 
                               class="form-control @error('email') is-invalid @enderror" 
                               value="{{ old('email') }}" 
                               required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Messaggio</label>
                        <textarea name="message" 
                                  class="form-control @error('message') is-invalid @enderror" 
                                  rows="5" 
                                  required>{{ old('message') }}</textarea>
                        @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button class="btn btn-primary btn-lg w-100 shadow-sm fw-bold">Invia</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
