@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="text-3xl font-bold tracking-tight text-zinc-900">Home</h1>
    <p class="mt-2 text-zinc-600">Controller: <code class="rounded bg-zinc-100 px-1.5 py-0.5 text-sm">PageController@home</code> → <code class="rounded bg-zinc-100 px-1.5 py-0.5 text-sm">home.blade.php</code></p>
    <p class="mt-1 text-zinc-600">Nama app: <strong class="text-zinc-900">{{ config('app.name') }}</strong></p>

    {{-- Blok ini hanya tampil “wah” kalau Tailwind + Vite jalan (npm run dev atau npm run build) --}}
    <div class="mt-8 rounded-2xl border border-emerald-200 bg-linear-to-br from-emerald-50 to-teal-100 p-6 shadow-lg shadow-emerald-900/10">
        <p class="text-xs font-semibold uppercase tracking-wider text-emerald-800">Cek Tailwind</p>
        <p class="mt-2 text-lg font-semibold text-emerald-950">Kalau kamu lihat kotak hijau gradien, bayangan, dan sudut membulat → Tailwind aktif.</p>
        <div class="mt-4 flex flex-wrap gap-2">
            <span class="inline-flex items-center rounded-full bg-emerald-600 px-3 py-1 text-sm font-medium text-white">badge emerald</span>
            <span class="inline-flex items-center rounded-full bg-white/80 px-3 py-1 text-sm font-medium text-emerald-800 ring-1 ring-emerald-600/20">badge putih</span>
        </div>
    </div>
    <p class="mt-4 text-sm text-amber-800 bg-amber-50 border border-amber-200 rounded-lg px-3 py-2">
        <strong>Tanpa Vite:</strong> kotak di atas akan terlihat polos (hampir tanpa warna/spacing). Jalankan <code class="text-amber-900">npm run dev</code> di folder project, lalu refresh.
    </p>
@endsection
