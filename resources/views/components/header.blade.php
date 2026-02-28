<header>
    <img src="/img/logo.png" alt="logo">
    <nav>
        <a href="/" class="@if($page === 'home') selected @endif">Home</a>
        <a href="/" class="@if($page === 'order') selected @endif">Bestellen</a>
        <a href="/" class="@if($page === 'reserve') selected @endif">Reserveren</a>
        <a href="/contact" class="@if($page === 'contact') selected @endif">Contact opnemen</a>
    </nav>
    <button onclick="window.location.href = '/login'">Login</button>
</header>
