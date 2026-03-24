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
            main h1 { font-size: 1.5rem; font-weight: 600; margin: 0 0 0.75rem; }
            main code { font-size: 0.875em; background: #f4f4f5; padding: 0.15rem 0.4rem; border-radius: 0.25rem; }
        </style>
    @endif
    @stack('styles')
    {{-- Nav 100% CSS biasa; setelah stack agar mengalahkan Bootstrap Reboot --}}
    <link rel="stylesheet" href="{{ asset('css/navigation.css') }}">
</head>
<body @class([
    'min-h-screen bg-zinc-50 text-zinc-900 antialiased',
    'font-sans' => $viteReady,
]) style="font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;">
    <div @class([
        'mx-auto max-w-2xl px-4 py-10' => $viteReady,
        'shell' => ! $viteReady,
    ])>
        <x-navigation />
        <main @class(['space-y-4' => $viteReady])>
            @yield('content')
        </main>
    </div>
    @stack('scripts')
</body>
</html>
