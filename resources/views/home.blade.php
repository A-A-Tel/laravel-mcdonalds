<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>
        @include('header', ['page' => 'home'])

        <main>
            <div class="sensation-container">
                <img src="/img/chicken-sensation.png" alt="chicken">
                <div>
                    <h2>Bij de McDonald's hebben wij jouw nieuwe favoriete burger.</h2>
                    <p>Hier hebben we een gerecht voor iedereen hun smaken. Zin in kip? Beef? Salade? Bij de McDonald's hebben we het. Check ook onze app voor allerlei kortingen en deals. </p>
                </div>
            </div>
        </main>
    </body>
</html>
