@extends('layouts.guest')

@section('title', 'Daftar')

@section('content')
    <h1 style="margin: 0 0 0.25rem; font-size: 1.5rem; font-weight: 700;">Daftar</h1>
    <p style="margin: 0 0 1.5rem; font-size: 0.875rem; color: #71717a;">Buat akun baru untuk masuk ke aplikasi.</p>

    @if ($errors->any())
        <div style="margin-bottom: 1rem; padding: 0.75rem; background: #fef2f2; border: 1px solid #fecaca; border-radius: 8px; color: #991b1b; font-size: 0.875rem;">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}" style="display: flex; flex-direction: column; gap: 1rem;">
        @csrf

        <div>
            <label for="name" style="display: block; font-size: 0.875rem; font-weight: 500; margin-bottom: 0.35rem;">Nama</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                required
                autofocus
                autocomplete="name"
                style="width: 100%; padding: 0.6rem 0.75rem; border: 1px solid #d4d4d8; border-radius: 8px; font-size: 1rem;"
            >
        </div>

        <div>
            <label for="email" style="display: block; font-size: 0.875rem; font-weight: 500; margin-bottom: 0.35rem;">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required
                autocomplete="email"
                style="width: 100%; padding: 0.6rem 0.75rem; border: 1px solid #d4d4d8; border-radius: 8px; font-size: 1rem;"
            >
        </div>

        <div>
            <label for="password" style="display: block; font-size: 0.875rem; font-weight: 500; margin-bottom: 0.35rem;">Password</label>
            <div style="display: flex; gap: 0.5rem; align-items: center;">
                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                    autocomplete="new-password"
                    style="width: 100%; padding: 0.6rem 0.75rem; border: 1px solid #d4d4d8; border-radius: 8px; font-size: 1rem;"
                >
                <button
                    type="button"
                    data-password-toggle-target="password"
                    aria-label="Tampilkan password"
                    title="Tampilkan password"
                    style="flex: 0 0 auto; padding: 0.6rem 0.65rem; border: 1px solid #d4d4d8; border-radius: 8px; background: #f4f4f5; cursor: pointer; display: inline-flex; align-items: center; justify-content: center;"
                >
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M1.5 12C1.5 12 5.5 4.5 12 4.5C18.5 4.5 22.5 12 22.5 12C22.5 12 18.5 19.5 12 19.5C5.5 19.5 1.5 12 1.5 12Z" stroke="#18181b" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#18181b" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>

        <div>
            <label for="password_confirmation" style="display: block; font-size: 0.875rem; font-weight: 500; margin-bottom: 0.35rem;">Konfirmasi password</label>
            <div style="display: flex; gap: 0.5rem; align-items: center;">
                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                    style="width: 100%; padding: 0.6rem 0.75rem; border: 1px solid #d4d4d8; border-radius: 8px; font-size: 1rem;"
                >
                <button
                    type="button"
                    data-password-toggle-target="password_confirmation"
                    aria-label="Tampilkan konfirmasi password"
                    title="Tampilkan konfirmasi password"
                    style="flex: 0 0 auto; padding: 0.6rem 0.65rem; border: 1px solid #d4d4d8; border-radius: 8px; background: #f4f4f5; cursor: pointer; display: inline-flex; align-items: center; justify-content: center;"
                >
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M1.5 12C1.5 12 5.5 4.5 12 4.5C18.5 4.5 22.5 12 22.5 12C22.5 12 18.5 19.5 12 19.5C5.5 19.5 1.5 12 1.5 12Z" stroke="#18181b" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#18181b" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>

        <button type="submit" style="margin-top: 0.25rem; padding: 0.65rem 1rem; background: #2563eb; color: #fff; border: none; border-radius: 8px; font-weight: 600; font-size: 1rem; cursor: pointer;">
            Daftar
        </button>
    </form>

    <p style="margin: 1.25rem 0 0; font-size: 0.875rem; color: #71717a;">
        Sudah punya akun?
        <a href="{{ route('login') }}" style="color: #2563eb; font-weight: 500;">Masuk</a>
    </p>
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const buttons = document.querySelectorAll('[data-password-toggle-target]');
            buttons.forEach((btn) => {
                btn.addEventListener('click', () => {
                    const targetId = btn.getAttribute('data-password-toggle-target');
                    const input = document.getElementById(targetId);
                    if (!input) return;

                    const isPassword = input.type === 'password';
                    input.type = isPassword ? 'text' : 'password';

                    const isConfirm = targetId === 'password_confirmation';
                    btn.setAttribute(
                        'aria-label',
                        isPassword ? (isConfirm ? 'Sembunyikan konfirmasi password' : 'Sembunyikan password') : (isConfirm ? 'Tampilkan konfirmasi password' : 'Tampilkan password')
                    );
                    btn.setAttribute(
                        'title',
                        isPassword ? (isConfirm ? 'Sembunyikan konfirmasi password' : 'Sembunyikan password') : (isConfirm ? 'Tampilkan konfirmasi password' : 'Tampilkan password')
                    );
                });
            });
        });
    </script>
@endpush
@endsection
