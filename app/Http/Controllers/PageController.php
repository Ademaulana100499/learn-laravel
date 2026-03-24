<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Home — contoh: controller mengembalikan view.
     */
    public function home()
    {
        return view('home');
    }

    /**
     * About — contoh: controller mengirim data ke view (nama, skills).
     */
    public function about()
    {
        return view('about', [
            'nama' => 'Ade',
            'role' => 'Web Developer',
            'skills' => ['Next.js', 'Supabase', 'Laravel', 'PostgreSQL'],
        ]);
    }

    /**
     * Contact — contoh: pakai config() (dari .env / config).
     */
    public function contact()
    {
        return view('contact', [
            'appName' => config('app.name'),
            'debug' => config('app.debug'),
        ]);
    }

    /**
     * Contoh route parameter: GET /users/123 → $id = 123.
     */
    public function showUser(string $id)
    {
        return view('user-show', ['id' => $id]);
    }

    /**
     * Contoh response JSON (seperti API).
     */
    public function apiHello()
    {
        return response()->json([
            'message' => 'Hello from Laravel',
            'app' => config('app.name'),
        ]);
    }
}
