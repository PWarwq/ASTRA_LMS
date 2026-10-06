<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureDealer
{
    /**
     * Handle an incoming request.
     *
     * Lokasi: app/Http/Middleware/EnsureDealer.php
     * Didaftarkan di: bootstrap/app.php (alias 'dealer')
     * Dipakai di: routes/web.php -> Route::middleware(['dealer'])->group(...)
     *
     * Tugas: hanya loloskan user yang role-nya 'dealer'.
     * Butuh kolom 'role' di tabel users (lihat database/migrations/*_create_users_table.php).
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if (! $user || $user->role !== 'dealer') {
            abort(403, 'Khusus dealer.');
        }

        return $next($request);
    }
}
