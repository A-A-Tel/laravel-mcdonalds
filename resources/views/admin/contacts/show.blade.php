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
                <button type="submit" style="background: var(--accent)"
                        onclick="window.location.assign('{{route('admin.contacts.edit', [$contact_request->id])}}')">
                    {{$contact_request->processed ? 'Behandel' : 'Niet meer behandelen'}}</button>
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
