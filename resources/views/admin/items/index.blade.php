<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ config('app.name', 'Laravel') }} - Menu items</title>
</head>
<body>
@include('components.admin.header', ['page' => 'admin.items'])

<main>
    <a href="{{route('admin.items.create')}}" class="item-add">Toevoegen</a>
    <div class="child-wrapper">
        @foreach($items as $item)
            @include('components.item', ['item' => $item, 'admin' => true])
        @endforeach
    </div>
</main>

@include('components.admin.footer')
</body>
</html>
