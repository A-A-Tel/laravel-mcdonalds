<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <title>{{ config('app.name', 'Laravel') }} - Home</title>
</head>
<body>
@include('components.header', ['page' => 'home'])

<main>
    <div class="sensation-container">
        <img src="/img/chicken-sensation.png" alt="chicken">
        <div class="generic-text-box">
            <h2>Bij de McDonald's hebben wij jouw nieuwe favoriete burger.</h2>
            <p>Hier hebben we een gerecht voor iedereen hun smaken. Zin in kip? Beef? Salade? Bij de McDonald's hebben
                we het. Check ook onze app voor allerlei kortingen en deals. </p>
        </div>
    </div>

    <div class="mcdonalds-world-container">
        <img src="/img/mcdonalds-world.png" alt="McDonalds-buildings">
        <div class="generic-text-box">
            <h2>Wij hebben restaurants over de hele wereld.</h2>
            <p>Al bent u aan het genieten in de staten, de prachtige landschappen van Japan, de lage landen langs the
                Europese kust of the kleine eilanden van Hawaii, er is altijd een McDonald's bij u in de buurt.</p>
            <a target="_blank" href="https://www.google.com/maps/search/mcdonalds/">Bekijk locaties</a>
        </div>
    </div>

    <div class="cafe-container">
        <div class="generic-text-box">
            <h2>McCafé bij u in de buurt.</h2>
            <p>McDonald's bied veel andere restaurants uit met McCafé. Hier zal een van onze geweldige en vriendelijke
                crewleden uw koffie persoonlijk maken. Wij bieden veel keuzes in soorten koffie, soorten melk en
                versnaperingen zoals appeltaarten en brownies</p>
        </div>
    </div>
</main>

@include('components.footer')
</body>
</html>
