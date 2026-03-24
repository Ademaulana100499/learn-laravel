@extends('layouts.app')

@section('title', 'About')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')
    <article class="about-page">
        <header class="about-header">
            <h1 class="about-title">About {{ $nama }}</h1>
            <p class="about-role">Role: <strong>{{ $role }}</strong></p>
        </header>

        <p class="about-intro">
            Skills di bawah di-render dengan direktif Blade <code>@@foreach</code>.
            Teks <code>&#64;foreach</code> di paragraf ini memakai entity HTML supaya aman di Blade.
        </p>

        <section class="about-skills" aria-labelledby="about-skills-heading">
            <h2 id="about-skills-heading">Skills</h2>
            <ul>
                @foreach ($skills as $skill)
                    <li>{{ $skill }}</li>
                @endforeach
            </ul>
        </section>

        <p class="about-footer">
            Data dari controller: <code>PageController&#64;about</code>
        </p>
    </article>
@endsection
