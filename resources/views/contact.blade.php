@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>
    <p>Nama aplikasi (dari <code>config('app.name')</code>): <strong>{{ $appName }}</strong>.</p>
    @if ($debug)
        <p>Mode debug: <strong>ON</strong> (dari .env <code>APP_DEBUG=true</code>).</p>
    @else
        <p>Mode debug: OFF.</p>
    @endif
    <p><small>Menampilkan nama direktif di teks: pakai <code>@@</code> di Blade (dua at) agar jadi satu at di HTML, atau pakai entity <code>&amp;#64;if</code> agar tampil sebagai <code>&#64;if</code> tanpa dieksekusi Blade.</small></p>
@endsection
