<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ config('app.name', 'Laravel') }} - Contact</title>
</head>
<body class="contact-body">
@include('components.header', ['page' => 'contact'])

<main>
    <form class="generic-form" method="post" action="{{route('reservations.store')}}">
        @csrf
        <input type="number" min="2" max="16" name="people_count" placeholder="Aantal mensen" value="{{ old('people_count') }}">
        <textarea minlength="16" maxlength="128" name="message"  placeholder="Bericht">{{ old('message') }}</textarea>
        <button type="submit">Opsturen</button>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <h6>{{ $error }}</h6>
            @endforeach
        @endif
    </form>
</main>

@include('components.footer')
</body>
</html>
