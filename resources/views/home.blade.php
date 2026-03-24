@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Home</h1>
    <p>Ini halaman home. Controller: <code>PageController@home</code> → view <code>home.blade.php</code>.</p>
    <p>Nama app dari config: <strong>{{ config('app.name') }}</strong> (dari .env / config/app.php).</p>
@endsection
