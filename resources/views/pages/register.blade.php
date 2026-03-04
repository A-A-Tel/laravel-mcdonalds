<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ config('app.name', 'Laravel') }} - Register</title>
</head>
<body class="contact-body">
@include('components.header', ['page' => 'register'])


<main>
    <form action="{{ route('register.attempt') }}" method="post" class="generic-form">
        @csrf
        <input type="text" required name="name" minlength="2" maxlength="128" placeholder="Naam">
        <input required type="email" placeholder="Email" name="email" value="{{ old('email') }}">
        <input min="6" required type="password" placeholder="Wachtwoord" name="password">
        <input min="6" max="512" required type="password" placeholder="Wachtwoord" name="password_confirmation">

        @if($errors->any())
            @foreach ($errors->all() as $error)
                <h6>{{ $error }}</h6>
            @endforeach
        @endif
        <button type="submit">Registreren</button>
    </form>
</main>

@include('components.footer')
</body>
</html>
