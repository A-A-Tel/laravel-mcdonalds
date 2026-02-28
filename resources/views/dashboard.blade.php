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

@include('components.footer')
</body>
</html>
