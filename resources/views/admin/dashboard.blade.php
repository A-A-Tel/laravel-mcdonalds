<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ config('app.name', 'Laravel') }} - Contact</title>
</head>
<body class="contact-body">
@include('components.admin.header', ['page' => 'admin'])

<main>
    <div class="admin-panel-container">
        <span><a href="{{route('admin.items.index')}}">Menukaart</a></span>
        <span><a href="{{route('admin.reservations.index')}}">Reserveringen</a></span>
        <span><a href="{{route('admin.contacts.index')}}">Contactinzendingen</a></span>
    </div>
</main>

@include('components.admin.footer')
</body>
</html>
