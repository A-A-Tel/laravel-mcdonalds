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
    <div>
        <h1>
            Hallo, {{ $user->name }}!
        </h1>
        <ul>
            <li>
                Email: {{ $user->email }}
            </li>
            <li>
                Accountaanmaak datum: {{ $user->created_at }}
            </li>
        </ul>
    </div>
</main>

@include('components.footer')
</body>
</html>
