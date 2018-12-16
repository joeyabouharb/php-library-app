<?php
namespace App\Http\Middleware;

use Auth; //at the top
function handle($request, Closure $next)
{
	if (Auth::check() && Auth::user()->role == 'admin') {
		return $next($request);
	}
	else{ 
		return redirect('/');
	}

}
