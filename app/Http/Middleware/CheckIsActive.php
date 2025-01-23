<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckIsActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
   
        if (Auth::check() && optional(Auth::user()->verifikasiakun)->status !== 'verified') {
            if ($request->route()->getName() !== 'verifikasi.pengajuan') {
                return redirect()->route('verifikasi.pengajuan');
            }
    

        }
        return $next($request);
    }
}
