# Styling di project Laravel ini

Project ini pakai **Vite** + **Tailwind CSS v4** (sama ekosistem tooling seperti banyak app modern). Blade = HTML; tampilan diatur lewat **utility class Tailwind** dan/atau **`resources/css/app.css`**.

---

## Perbandingan singkat dengan Next.js

| Next.js | Laravel (setup ini) |
|--------|----------------------|
| `globals.css`, CSS Modules, Tailwind di JSX `className` | `resources/css/app.css`, class Tailwind di atribut HTML Blade `class` |
| `npm run dev` (Next) | `npm run dev` (Vite) + **`php artisan serve`** (PHP) — biasanya **dua terminal** |
| HMR untuk komponen React | Vite bisa hot-reload CSS/JS; **Blade** tetap perlu refresh halaman (atau Vite `refresh: true` membantu reload saat file `.blade.php` berubah saat dev server jalan) |

---

## Cara kerja

1. **`resources/css/app.css`** — impor Tailwind (`@import 'tailwindcss'`), tema font, dan CSS custom kamu.
2. **`resources/views/.../blade.php`** — tambahkan class Tailwind pada elemen, contoh: `class="text-lg font-semibold text-blue-600"`.
3. **`@vite(['resources/css/app.css', 'resources/js/app.js'])`** di layout (`layouts/app.blade.php`) — memuat asset hasil Vite.

Tanpa Vite jalan dan tanpa build, layout tetap memakai **CSS fallback** kecil agar halaman tidak polos.

---

## Yang perlu kamu jalankan

**Sekali saja** (kalau belum):

```bash
cd learn-laravel
npm install
```

Kalau `npm run dev` memunculkan **`vite: command not found`**, artinya dependency belum terpasang — jalankan **`npm install`** dulu di folder `learn-laravel`.

**Saat development** (dua terminal):

Terminal 1 — PHP:

```bash
php artisan serve
```

Terminal 2 — Vite (Tailwind + refresh):

```bash
npm run dev
```

Buka **http://localhost:8000**. Dengan `npm run dev` aktif, file `public/hot` ada → layout memuat Tailwind penuh.

**Production / coba tanpa Vite dev:**

```bash
npm run build
```

Hasil ada di `public/build/`; `php artisan serve` saja cukup, tanpa `npm run dev`.

---

## Di mana mengubah style

- **Global / token / layer Tailwind:** edit **`resources/css/app.css`**.
- **Per halaman / per komponen layout:** edit Blade dan tambahkan class di `class="..."`.
- **Gambar & file statis:** **`public/`** (misalnya `public/images/...`).

---

## Tips

- Dokumentasi utility: [Tailwind CSS](https://tailwindcss.com/docs).
- Konfigurasi Vite: **`vite.config.js`** (input CSS/JS sudah diset ke `resources/css/app.css` dan `resources/js/app.js`).
