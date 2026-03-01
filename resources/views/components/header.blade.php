<header>
    <div><img src="/img/logo.png" alt="logo"></div>
    <nav>
        <a href="/" class="@if($page === 'home') selected @endif">Home</a>
        <a href="/" class="@if($page === 'order') selected @endif">Bestellen</a>
        <a href="/" class="@if($page === 'reserve') selected @endif">Reserveren</a>
        <a href="/contact" class="@if($page === 'contact') selected @endif">Contact opnemen</a>
    </nav>
    @if(Auth::check())
        <div id="buttons">
            <button onclick="window.location.href='/dashboard'">Controlepaneel</button>
            <form method="post" action="/logout">@csrf<button type="submit">Log uit</button></form>
        </div>
    @else
        <div id="buttons"><button onclick="window.location.href='/login'">Log in</button></div>
    @endif
</header>
