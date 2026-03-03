<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ config('app.name', 'Laravel') }} - {{ $contact_request->name }}</title>
</head>
<body>
@include('components.admin.header', ['page' => 'admin.contacts.show'])

<main>
    <div class="item-show">
        @include('components.admin.contact_request', ['contact_request' => $contact_request, 'user' => $user])
        <div class="item-modify-buttons">
            <form method="post" action="{{route('admin.contacts.update', [$contact_request->id])}}">
                @csrf
                @method('PATCH')
                <button type="submit" style="background: var(--accent)">
                    {{$contact_request->processed ? 'Niet meer behandelen' : 'Behandel'}}</button>
            </form>
            <form method="post" action="{{ route('admin.contacts.destroy', [$contact_request->id]) }}">
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
