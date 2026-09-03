<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="text-center py-5">

    @if(session('emailSent'))
        <div class="alert alert-success">
            {{ session('emailSent') }}
        </div>
    @endif

    <h1 class="display-4 mb-4">Benvenuta nel MovieDB 🎬</h1>

    <p class="lead mb-4">
        Esplora la nostra collezione di film, scopri dettagli, registi e generi.
    </p>

    <a href="{{ route('movie.list') }}" class="btn btn-primary btn-lg">
        Vai alla lista dei film
    </a>

</div>

</body>
</html>