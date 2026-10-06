<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureSupervisor
{
    /**
     * Handle an incoming request.
     *
     * Lokasi: app/Http/Middleware/EnsureSupervisor.php
     * Didaftarkan di: bootstrap/app.php (alias 'supervisor')
     * Dipakai di: routes/web.php -> Route::middleware(['supervisor'])->group(...)
     *
     * Tugas: hanya loloskan user yang role-nya 'supervisor'.
     * Butuh kolom 'role' di tabel users (lihat database/migrations/*_create_users_table.php).
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        if (! $user || $user->role !== 'supervisor') {
            abort(403, 'Khusus supervisor.');
        }
        return $next($request);
    }
}
