<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Comprobar si el usuario ha verificado su correo
                if (Auth::user()->hasVerifiedEmail()) {
                    return redirect(RouteServiceProvider::HOME);
                } else {
                    // Si no ha verificado el email, redirige a la página de verificación
                    return redirect()->route('verification.notice');
                }
            }
        }

        return $next($request);
    }
}
