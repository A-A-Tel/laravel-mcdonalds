<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
@include('components.admin.header', ['page' => 'admin.contacts.show'])

<main>
    <div class="item-show">
        @include('components.admin.reservation_request', ['reservation_request' => $reservation_request, 'user' => $user])
        <div class="item-modify-buttons">
            <form method="post" action="{{route('admin.reservations.update', [$reservation_request->id])}}">
                @csrf
                @method('PATCH')
                <button type="submit" style="background: var(--accent)">
                    {{$reservation_request->allowed ? 'Verbieden' : 'Toestaan'}}</button>
            </form>
            <form method="post" action="{{ route('admin.reservations.destroy', [$reservation_request->id]) }}">
                @csrf
                @method('DELETE')
                <button style="background: var(--secondary-light)" type="submit">Verwijderen</button>
            </form>
        </div>
    </div>
</main>

@include('components.admin.footer')
</body>
</html>
