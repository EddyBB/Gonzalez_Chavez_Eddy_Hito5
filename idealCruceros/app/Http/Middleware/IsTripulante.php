<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsTripulante
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $id = Auth::user()->id_usuario;
        if (Auth::user() &&  Auth::user()->rol == 'tripulante') {
            return $next($request);
       }

       return redirect('/perfilTripulante/'.$id)->with('error','no tienes permisos para acceder');
    }
}
