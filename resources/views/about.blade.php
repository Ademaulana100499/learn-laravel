@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1>About {{ $nama }}</h1>
    <p>Role: {{ $role }}</p>
    <p>Skills (direktif di bawah adalah <code>@@foreach</code> asli; teks <code>&#64;foreach</code> di sini pakai entity HTML agar aman):</p>
    <ul>
        @foreach ($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
    <p><small>Data dikirim dari controller: <code>PageController&#64;about</code>.</small></p>
@endsection
