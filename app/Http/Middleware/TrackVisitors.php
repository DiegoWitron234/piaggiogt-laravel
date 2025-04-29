<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;

class TrackVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Clave que usaremos en la sesión
        $sessionKey = 'visitor_counted';

        // Si la sesión aún NO tiene esa marca, contamos la visita
        if (! $request->session()->has($sessionKey)) {
            Visitor::create([
                'ip_address' => $request->ip(),
                'user_agent' => $request->header('User-Agent'),
                'visited_at' => now(),
            ]);

            // Marcamos la sesión para no volver a contar
            $request->session()->put($sessionKey, true);
        }

        return $next($request);
    }
}
