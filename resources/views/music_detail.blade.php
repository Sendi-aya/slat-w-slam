<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réserver {{ $music->nom }}</title>
</head>
<body>
    <h1>{{ $music->nom }}</h1>

    <div class="music-details">
        <p><strong>Nom:</strong> {{ $music->nom }}</p>
        <p><strong>Prix:</strong> {{ $music->prix }} DH</p>
        <!-- Ajoutez d'autres détails de la musique si nécessaire -->
    </div>

    <hr>

    <h2>Réserver cette musique</h2>

    <form id="reservationForm" action="{{ route('store_reservation') }}" method="POST">
        @csrf
        <div>
            <label for="start_date">Date de début de la réservation :</label>
            <input type="date" id="start_date" name="start_date" required>
        </div>
        <div>
            <label for="end_date">Date de fin de la réservation :</label>
            <input type="date" id="end_date" name="end_date" required>
        </div>
        <input type="hidden" name="music_id" value="{{ $music->id }}">
        <button type="submit">Réserver</button>
    </form>

</body>
</html>
