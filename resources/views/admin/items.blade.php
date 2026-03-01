<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ config('app.name', 'Laravel') }} - Contact</title>
</head>
<body>
@include('components.admin-header', ['page' => 'admin/items'])

<main>
    <div class="order-item-container">
        @foreach($items as $item)
            @include('components.item', ['item' => $item])
        @endforeach
    </div>
</main>

@include('components.admin-footer')
</body>
</html>
