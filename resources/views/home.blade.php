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
    </body>
</html>
