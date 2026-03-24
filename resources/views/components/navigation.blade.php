{{--
    Navbar — styling hanya dari public/css/navigation.css (CSS biasa).
    Pakai: <x-navigation />
--}}
<nav class="site-nav" role="navigation" aria-label="Menu utama">
    <a href="{{ route('home') }}" class="site-nav__link site-nav__link--primary">Home</a>
    <a href="{{ route('about') }}" class="site-nav__link site-nav__link--primary">About</a>
    <a href="{{ route('contact') }}" class="site-nav__link site-nav__link--primary">Contact</a>
    <a href="{{ url('/hello') }}" class="site-nav__link site-nav__link--muted">/hello</a>
    <a href="{{ url('/api/hello') }}" class="site-nav__link site-nav__link--muted">/api/hello</a>
</nav>
