<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ config('app.name', 'Laravel') }} - Reserveringen</title>
</head>
<body>
@include('components.header', ['page' => 'reservations'])

<main>
    <div class="child-wrapper">
        @foreach($reservation_requests as $reservation_request)
            @include('components.reservation_request', ['$reservation_request' => $reservation_request])
        @endforeach
    </div>
</main>

@include('components.footer')
</body>
</html>
