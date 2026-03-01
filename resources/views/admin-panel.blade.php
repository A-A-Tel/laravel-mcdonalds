<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ config('app.name', 'Laravel') }} - Contact</title>
</head>
<body class="contact-body">
@include('components.admin-header', ['page' => 'admin'])

<main>
    <div class="admin-panel-container">
        <span><a href="">Bestellingen</a></span>
        <span><a href="">Reserveringen</a></span>
        <span><a href="">Contactinzendingen</a></span>
    </div>
</main>

@include('components.admin-footer')
</body>
</html>
