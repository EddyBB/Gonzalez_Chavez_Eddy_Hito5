<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $rol = Auth::user()->rol;
            $id = Auth::user()->id_usuario;

            switch ($rol) {
                case 'admin':
                    return redirect('/home');
                    break;
                case 'tripulante':
                    return redirect('/perfilTripulante/'.$id);
                    break;
                default:
                    return redirect('/');
                    break;
            }
        }
        return $next($request);
    }
}
