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
        <input required type="email" placeholder="Email" name="email" value="{{ old('email') }}">
        <input required type="password" placeholder="Wachtwoord" name="password">
        <input required type="password" placeholder="Wachtwoord" name="password_confirmation">

        @if($errors->any())
            @foreach ($errors->all() as $error)
                <h6>{{ $error }}</h6>
            @endforeach
        @endif
        <button type="submit">Inloggen</button>
    </form>
</main>

@include('components.footer')
</body>
</html>
