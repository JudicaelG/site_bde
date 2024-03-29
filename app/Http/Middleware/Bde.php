<?php

namespace App\Http\Middleware;

use Closure;

class Bde
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();
		
		if($user && $user->id_statut === 3){
			return $next($request);
		}
		
		return redirect()->route('home');
    }
}
