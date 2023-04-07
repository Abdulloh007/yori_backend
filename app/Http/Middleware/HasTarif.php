<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class HasTarif
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        $response = $next($request);

        $token = $request->bearerToken();
        
        $user = User::where('bearer',$token)->first();
        
        $tarif_expire = $user->tarif_expire;
        
        $date = date('Y-m-d');

        $tarif_expire = date('Y-m-d', strtotime($tarif_expire)); 
        
        if($date > $tarif_expire){
            return redirect()->route('tarif_expire');
        }
        
        return $response;
    }
}
