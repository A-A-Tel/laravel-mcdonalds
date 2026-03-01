<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ config('app.name', 'Laravel') }} - Home</title>
</head>
<body>
@include('components.header', ['page' => 'menu'])

<main>
    <div class="order-item-container">
        @foreach($items as $item)
            @include('components.item', ['item' => $item])
        @endforeach
    </div>
</main>

@include('components.footer')
</body>
</html>
