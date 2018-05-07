<?php

namespace App\Http\Middleware;

use Closure;

class Administrator
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
				if(\Auth::user()->id == 1){
					return redirect('/')
						->with(['mensaje' => 'Usuario no autorizado']);
				}
			
        return $next($request);
    }
}
