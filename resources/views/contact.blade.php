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
    <p><small>Contoh penggunaan <code>@if</code> dan data dari config.</small></p>
@endsection
