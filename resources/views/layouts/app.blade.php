@php
    $viteReady = file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'));
@endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @if ($viteReady)
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        {{-- Tanpa npm run dev / npm run build: tetap rapi dengan CSS kecil --}}
        <style>
            body { font-family: 'Instrument Sans', system-ui, sans-serif; background: #fafafa; color: #18181b; margin: 0; min-height: 100vh; }
            .shell { max-width: 42rem; margin: 0 auto; padding: 2rem 1rem; }
            nav.app-nav { display: flex; flex-wrap: wrap; gap: 0.5rem 1.25rem; margin-bottom: 2rem; padding-bottom: 1.25rem; border-bottom: 1px solid #e4e4e7; }
            nav.app-nav a { color: #2563eb; text-decoration: none; font-size: 0.875rem; font-weight: 500; }
            nav.app-nav a:hover { text-decoration: underline; }
            main h1 { font-size: 1.5rem; font-weight: 600; margin: 0 0 0.75rem; }
            main code { font-size: 0.875em; background: #f4f4f5; padding: 0.15rem 0.4rem; border-radius: 0.25rem; }
        </style>
    @endif
    @stack('styles')
</head>
<body @class([
    'min-h-screen bg-zinc-50 text-zinc-900 antialiased',
    'font-sans' => $viteReady,
]) style="font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;">
    <div @class([
        'mx-auto max-w-2xl px-4 py-10' => $viteReady,
        'shell' => ! $viteReady,
    ])>
        <nav @class([
            'app-nav mb-10 flex flex-wrap gap-x-5 gap-y-2 border-b border-zinc-200 pb-6' => $viteReady,
            'app-nav' => ! $viteReady,
        ])>
            <a href="{{ route('home') }}" @class(['text-sm font-medium text-blue-600 hover:text-blue-800 hover:underline' => $viteReady])>Home</a>
            <a href="{{ route('about') }}" @class(['text-sm font-medium text-blue-600 hover:text-blue-800 hover:underline' => $viteReady])>About</a>
            <a href="{{ route('contact') }}" @class(['text-sm font-medium text-blue-600 hover:text-blue-800 hover:underline' => $viteReady])>Contact</a>
            <a href="{{ url('/hello') }}" @class(['text-sm font-medium text-zinc-500 hover:text-zinc-800 hover:underline' => $viteReady])>/hello</a>
            <a href="{{ url('/api/hello') }}" @class(['text-sm font-medium text-zinc-500 hover:text-zinc-800 hover:underline' => $viteReady])>/api/hello</a>
        </nav>
        <main @class(['space-y-4' => $viteReady])>
            @yield('content')
        </main>
    </div>
    @stack('scripts')
</body>
</html>
