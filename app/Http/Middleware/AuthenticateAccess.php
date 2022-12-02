<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class AuthenticateAccess
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $credentials = [
            'grant_type' => 'password',
            'client_id' => 2,
            'client_secret' => 'EgDwYss1HthxUbAjbRViO0QaNF82gsJIyCiKXiZr'
        ];

        if (in_array($request->header('Authorization'), $credentials)) {
            return $next($request);
        }

        abort(Response::HTTP_UNAUTHORIZED);
    }
}
