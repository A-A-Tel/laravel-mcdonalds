<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ config('app.name', 'Laravel') }} - Reserveringen</title>
</head>
<body>
@include('components.admin.header', ['page' => 'admin.reservation'])

<main>
    <div class="child-wrapper">
        @foreach($reservation_requests as $reservation_request)
            @include('components.admin.reservation_request', ['$reservation_request' => $reservation_request, 'user' => $reservation_request->user()->first()])
        @endforeach
    </div>
</main>

@include('components.admin.footer')
</body>
</html>
