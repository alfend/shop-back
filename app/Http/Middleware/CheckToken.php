<?php

namespace App\Http\Middleware;

use Closure;

class CheckToken
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
        $token = $request->header('token');

        if ($token === null || $token !== config('app.data_token')) {
            abort(response('Invalid token',403));
        }

        return $next($request);
    }
}
