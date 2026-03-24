@extends('layouts.app')

@section('title', 'Contact')

@push('styles')
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    >
@endpush

@push('scripts')
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"
    ></script>
@endpush

@section('content')
    <div class="contact-bootstrap">
        <h1 class="display-6 fw-bold text-primary mb-4">Contact</h1>

        <div class="card shadow-sm border-0 mb-4">
            <div class="card-header bg-primary text-white fw-semibold">
                Informasi aplikasi
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span class="text-muted">Nama app (<code>config('app.name')</code>)</span>
                    <span class="badge bg-primary rounded-pill">{{ $appName }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span class="text-muted">Mode debug</span>
                    @if ($debug)
                        <span class="badge bg-success">ON</span>
                    @else
                        <span class="badge bg-secondary">OFF</span>
                    @endif
                </li>
            </ul>
        </div>

        <div class="alert alert-info mb-4" role="alert">
            <strong>Tips Blade:</strong> untuk menampilkan teks <code>&#64;if</code> di HTML tanpa dieksekusi Blade,
            pakai entity <code>&amp;#64;if</code> atau ganda <code>@@</code> di file Blade.
        </div>

        <div class="card border-secondary">
            <div class="card-body">
                <h2 class="h5 card-title">Form contoh (Bootstrap)</h2>
                <p class="card-text text-muted small">Hanya tampilan; belum ada route <code>POST</code>.</p>
                <form class="row g-3" action="#" method="post" onsubmit="return false;">
                    @csrf
                    <div class="col-md-6">
                        <label for="contactName" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="contactName" placeholder="Nama kamu">
                    </div>
                    <div class="col-md-6">
                        <label for="contactEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="contactEmail" placeholder="nama@email.com">
                    </div>
                    <div class="col-12">
                        <label for="contactMessage" class="form-label">Pesan</label>
                        <textarea class="form-control" id="contactMessage" rows="3" placeholder="Tulis pesan…"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="button" class="btn btn-primary" disabled>Kirim (contoh)</button>
                        <button type="button" class="btn btn-outline-secondary">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
