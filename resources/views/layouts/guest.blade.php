{{-- Layout halaman tamu (login): tanpa navbar utama aplikasi --}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Login') — {{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Instrument Sans', system-ui, sans-serif;
            background: linear-gradient(160deg, #f4f4f5 0%, #e4e4e7 100%);
            color: #18181b;
            padding: 1rem;
        }
        .guest-card {
            width: 100%;
            max-width: 400px;
            background: #fff;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            border: 1px solid #e4e4e7;
        }
    </style>
    @stack('styles')
</head>
<body>
    <div class="guest-card">
        @yield('content')
    </div>
    @stack('scripts')
</body>
</html>
