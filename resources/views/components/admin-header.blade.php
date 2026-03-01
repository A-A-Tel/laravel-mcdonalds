<header class="admin-component">
    <div><img src="/img/logo.png" alt="logo"></div>
    <nav>
        <a href="/admin" class="@if($page === 'admin') selected @endif">Paneel</a>
        <a href="/admin/orders" class="@if($page === 'admin/orders') selected @endif">Bestellingen</a>
        <a href="/admin/reservations" class="@if($page === 'admin/contact') selected @endif">Reserveringen</a>
        <a href="/admin/contacts" class="@if($page === 'admin/reserve') selected @endif">Contactinzendingen</a>
    </nav>
    @if(Auth::check())
        <div id="buttons">
            <button onclick="window.location.href = '/dashboard'">Dashboard</button>
            <form method="post" action="/logout">@csrf<button type="submit">Logout</button></form>
        </div>
    @else
        <div id="buttons"><button onclick="window.location.href = '/login'">Login</button></div>
    @endif
</header>
