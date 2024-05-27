@extends('Master_page')
@section('title', 'Home')
@section('content')
<link rel="stylesheet" href="path/to/fontawesome/css/all.min.css">
<style>

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #fff;
    color: #1a202c;
}
h2{
    justify-content: center;
}
.container {
    background-color: #fff;
    padding: 3rem 0;
    min-height: 100vh;
    position: relative;
}

.content {
    max-width: 1120px;
    margin: 0 auto;
    padding: 0 1rem;
    text-align: center;
}

.title {
    font-size: 2rem;
    font-weight: 800;
    color: #1a202c;
    margin-bottom: 2.5rem;
}

.grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
}

@media (min-width: 640px) {
    .grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1024px) {
    .grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

.card {
    text-align: center;
    width: 400px;
    height: 500px;
    background: rgb(247, 242, 242)
}

.card-image {
    border-radius: 50%;
   
    width:200px;
    height:200px;
    object-fit: cover;
    margin: 27px auto;
}

.card-title {
    font-size: 30px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-weight: 500;
    color: #1a202c;
    margin-top: 1.5rem;
   
}

.card-text {
    font-size: 1rem;
    color:black;
    justify-content: center;
    margin-top: 0.5rem;
}

.button-container {
    margin-top: 2.5rem;
    text-align: center;
}

.appointment-button {
    background: transparent;
    border: 2px solid #1a202c;
    color: #1a202c;
    border-radius: 9999px;
    padding: 0.5rem 1rem;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

.appointment-button:hover {
    background-color: #1a202c;
    color: #fff;
}

.contact-button-container {
    position: fixed;
    bottom: 1rem;
    right: 1rem;
}

.contact-button {
    background-color: #d69e2e;
    color: #fff;
    border: none;
    border-radius: 9999px;
    padding: 0.5rem 1rem;
    display: flex;
    align-items: center;
    cursor: pointer;
    transition: background-color 0.3s;
}

.contact-button:hover {
    background-color: #b7791f;
}

.emoji {
    margin-right: 0.5rem;
}

</style>

<body>
   
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mariages</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h2 class="title">SALLES DE FETE</h2>
            <div class="grid">
                @foreach ($salles as $salle)
                <div class="card">
                    <img class="card-image" src="{{ asset('pictures/' . $salle->image) }}" alt="{{ $salle->nom }}">
                    <h3 class="card-title">{{ $salle->nom }}</h3>
                    <p class="card-text">{{ $salle->description }}</p>
                </div>
            @endforeach
                
            </div>
            <div class="button-container">
                <a href="{{ route('rendezv') }}"><button class="appointment-button">Prendre RDV</button></a>
            </div>
        </div>
        <div class="content">
            <h2 class="title">l'orechstra</h2>
            <div class="grid">
                @foreach ($musics as $music)
                <div class="card">
                    <img class="card-image" src="{{ asset('pictures/' . $music->image) }}" alt="{{ $music->nom }}">
                    <h3 class="card-title">{{ $music->nom }}</h3>
                    <p class="card-text">{{ $music->description }}</p>
                </div>
            @endforeach
                
            </div>
            <div class="button-container">
                <a href="{{ route('rendezv') }}"><button class="appointment-button">Prendre RDV</button></a>
            </div>
        </div>
        <div class="container">
            <div class="content">
                <h2 class="title">TRAITEUR</h2>
                <div class="grid">
                    @foreach ($traiteur as $traiteur)
                    <div class="card">
                        <img class="card-image" src="{{ asset('pictures/' . $traiteur->image) }}" alt="{{ $traiteur->nom }}">
                        <h3 class="card-title">{{ $traiteur->nom }}</h3>
                        <p class="card-text">{{ $traiteur->description }}</p>
                    </div>
                @endforeach
                    
                </div>
                <div class="button-container">
                    <a href="{{ route('rendezv') }}"><button class="appointment-button">Prendre RDV</button></a>

                </div>
            </div>
        <div class="contact-button-container">
            <button class="contact-button">
                <span class="emoji">😊</span> Contactez-nous
            </button>
        </div>
    </div>
</body>
</html>

@endsection
</html>
