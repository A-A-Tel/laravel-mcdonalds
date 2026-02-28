<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ config('app.name', 'Laravel') }} - Login</title>
</head>
<body class="contact-body">
@include('components.header', ['page' => 'login'])


<main>
    <form action="/login" method="post" class="login-form">
        @csrf
        <input required type="email" placeholder="Email" name="email">
        <input required type="password" placeholder="Wachtwoord" name="password">
        <button type="submit">Inloggen</button>
    </form>
</main>

@include('components.footer')
</body>
</html>
