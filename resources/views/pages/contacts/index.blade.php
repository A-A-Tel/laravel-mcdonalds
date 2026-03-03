<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ config('app.name', 'Laravel') }} - Home</title>
</head>
<body>
@include('components.header', ['page' => 'contacts'])

<main>
    <div class="child-wrapper">
        @foreach($contact_requests as $contact_request)
            @include('components.contact_request', ['$contact_request' => $contact_request])
        @endforeach
    </div>
</main>

@include('components.footer')
</body>
</html>
