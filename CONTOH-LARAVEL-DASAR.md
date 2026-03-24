# Contoh Sederhana — Laravel Dasar

Contoh ini mengimplementasikan materi dari folder **laravel-dasar/** (struktur, routing, controller, Blade, env & config).

## Cara menjalankan

```bash
php artisan serve
```

Buka: **http://localhost:8000**

---

## URL yang bisa dicoba

| URL | Konsep | File terkait |
|-----|--------|--------------|
| `/` | Route → Controller → View (layout) | `PageController@home`, `home.blade.php` |
| `/about` | Controller mengirim data ke view (`$nama`, `$skills`), `@foreach` | `PageController@about`, `about.blade.php` |
| `/contact` | Pakai `config()` + `@if` di Blade | `PageController@contact`, `contact.blade.php` |
| `/hello` | Route closure (tanpa controller) | `routes/web.php` |
| `/info` | `Route::view()` — langsung ke view | `routes/web.php`, `info.blade.php` |
| `/users/5` | Route parameter `{id}` → controller | `PageController@showUser`, `user-show.blade.php` |
| `/api/hello` | Response JSON (style API) | `PageController@apiHello` |
| `/welcome` | Halaman default Laravel | `welcome.blade.php` |

---

## File yang ditambah/diubah

- **routes/web.php** — definisi route (closure, view, controller, parameter).
- **app/Http/Controllers/PageController.php** — controller dengan method home, about, contact, showUser, apiHello.
- **resources/views/layouts/app.blade.php** — layout dengan `@yield('title')`, `@yield('content')`, nav.
- **resources/views/home.blade.php** — `@extends`, `@section`, `config('app.name')`.
- **resources/views/about.blade.php** — `{{ $nama }}`, `@foreach ($skills as $skill)`.
- **resources/views/contact.blade.php** — `@if ($debug)`.
- **resources/views/user-show.blade.php** — menampilkan parameter route `$id`.
- **resources/views/info.blade.php** — view untuk route view-only.

Dengan ini kamu bisa cek langsung alur: **route → controller → view** dan penggunaan **Blade** + **config**.
