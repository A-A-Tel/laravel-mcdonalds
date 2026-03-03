<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ config('app.name', 'Laravel') }} - {{ $item->name }}</title>
</head>
<body>
@include('components.admin.header', ['page' => 'admin.items.show'])

<main>
    <div class="item-show">
        @include('components.item', ['item' => $item])
        <div class="item-modify-buttons">
            <button style="background: var(--accent)" onclick="window.location.assign('{{route('admin.items.edit', [$item->id])}}')">Bewerken</button>
            <form method="post" action="{{ route('admin.items.destroy', [$item->id]) }}">
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
