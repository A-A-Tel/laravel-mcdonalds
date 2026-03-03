<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ config('app.name', 'Laravel') }} - Contact</title>
</head>
<body>
@include('components.admin.header', ['page' => 'admin.contacts'])

<main>
    <div class="child-wrapper">
        @foreach($contact_requests as $contact_request)
            @include('components.admin.contact_request', ['$contact_request' => $contact_request, 'user' => $contact_request->user()->first()])
        @endforeach
    </div>
</main>

@include('components.admin.footer')
</body>
</html>
