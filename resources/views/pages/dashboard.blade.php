<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ config('app.name', 'Laravel') }} - Dashboard</title>
</head>
<body class="contact-body">
@include('components.header', ['page' => 'dashboard'])

<main>
    <div class="dashboard">
        <h1>
            Hallo, <span>{{ Auth::user()->name }}</span>!
        </h1>
        <span>Email: <span>{{ Auth::user()->email }}</span></span>
        <span>Accountaanmaak datum: <span>{{ Auth::user()->created_at }}</span></span>
        <div>
            <a href="{{route('reservations.index')}}">Reserveringsverzoeken</a>
            <a href="{{route('contacts.index')}}">Contactinzendingen</a>
        </div>
    </div>
</main>

@include('components.footer')
</body>
</html>
