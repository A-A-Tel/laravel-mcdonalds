<header class="admin-component">
    <div><img src="/img/logo.png" alt="logo"></div>
    <nav>
        <a href="{{route('home')}}" class="@if($page === 'home') selected @endif">Home</a>
        <a href="{{route('admin.items.index')}}" class="@if($page === 'admin.items') selected @endif">Menu items</a>
        <a href="/admin/reservations" class="@if($page === 'admin.reserve') selected @endif">Reserveringen</a>
        <a href="{{route('admin.contacts.index')}}" class="@if($page === 'admin.contacts') selected @endif">Contactinzendingen</a>
    </nav>
    @if(Auth::check())
        <div id="buttons">
            <button onclick="window.location.assign('{{route('admin.dashboard')}}')">Dashboard</button>
            <form method="post" action="{{route('logout')}}">@csrf<button type="submit">Logout</button></form>
        </div>
    @else
        <div id="buttons"><button onclick="window.location.assign('{{route('login')}}')">Login</button></div>
    @endif
</header>
