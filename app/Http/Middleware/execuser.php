<?php

namespace App\Http\Middleware;

use Closure;

class execuser
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
    	  if($request->user()->is_admin!=1) {
    	  	return abort('404');
    	  }
        return $next($request);
    }
}
