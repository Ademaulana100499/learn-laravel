@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1>About {{ $nama }}</h1>
    <p>Role: {{ $role }}</p>
    <p>Skills (contoh <code>@foreach</code> di Blade):</p>
    <ul>
        @foreach ($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
    <p><small>Data dikirim dari controller: <code>PageController@about</code>.</small></p>
@endsection
