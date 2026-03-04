<header>
    <div><img src="/img/logo.png" alt="logo"></div>
    <nav>
        <a href="{{route('home')}}" class="@if($page === 'home') selected @endif">Home</a>
        <a href="{{route('menu')}}" class="@if($page === 'menu') selected @endif">Menukaart</a>
        <a href="{{route('reservation')}}" class="@if($page === 'reservation') selected @endif">Reserveren</a>
        <a href="{{route('contact')}}" class="@if($page === 'contact') selected @endif">Contact opnemen</a>
    </nav>
    @if(Auth::check())
        <div id="buttons">
            <button onclick="window.location.assign('{{Auth::user()->admin ? route('admin.dashboard') : route('dashboard')}}')">Dashboard</button>
            <form method="post" action="{{route('logout')}}">@csrf<button type="submit">Logout</button></form>
        </div>
    @else
        <div id="buttons">
            <button onclick="window.location.assign('{{route('register')}}')">Registreer</button>
            <button onclick="window.location.assign('{{route('login')}}')">Login</button>
        </div>
    @endif
</header>
