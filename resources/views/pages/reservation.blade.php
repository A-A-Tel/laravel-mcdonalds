<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ config('app.name', 'Laravel') }} - Reserveren</title>
</head>
<body class="contact-body">
@include('components.header', ['page' => 'reservation'])

<div class="generic-text-box reserve-box">
    <h2>Reserveer nu!</h2>
    <p>
        Reserveer nu bij ons restaurant voor een geweldig moment uit eten!
    </p>

    <a href="{{route('reservations.create')}}">Reserveringsverzoek opsturen</a>
</div>

@include('components.footer')
</body>
</html>
