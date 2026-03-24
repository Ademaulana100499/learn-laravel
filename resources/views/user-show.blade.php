@extends('layouts.app')

@section('title', 'User #' . $id)

@section('content')
    <h1>User ID: {{ $id }}</h1>
    <p>Ini contoh route parameter: URL <code>/users/{{ $id }}</code> → controller menerima <code>$id</code>.</p>
    <p><a href="{{ route('home') }}">← Kembali ke Home</a></p>
@endsection
