<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Owner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'owner_user')
    {
        if ( ! Auth::guard($guard)->check() ) {
            return redirect('owner/login');
        }

        return $next($request);
    }
}
