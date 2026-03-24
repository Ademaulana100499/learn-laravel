<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>
    <style>
        body { font-family: system-ui, sans-serif; max-width: 640px; margin: 0 auto; padding: 1.5rem; }
        nav { margin-bottom: 1.5rem; }
        nav a { margin-right: 1rem; color: #2563eb; }
        h1 { font-size: 1.5rem; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('contact') }}">Contact</a>
        <a href="{{ url('/hello') }}">/hello</a>
        <a href="{{ url('/api/hello') }}">/api/hello</a>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>
