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

<div class="generic-text-box">
    <h2>Neem contact met ons op via deze methodes</h2>
    <span>
        <img src="/img/phone.svg" alt="phone">
        <a target="_blank" href="tel:+310205642666">+31 020-5642666</a>
    </span>
    <span>
        <img src="/img/email.svg" alt="email">
        <a target="_blank" href="mailto:gastenrelaties@nl.mcd.com">gastenrelaties@nl.mcd.com</a>
    </span>
</div>

@include('components.footer')
</body>
</html>
