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
            'grant_type' => 'client_credentials',
            'client_id' => 5,
            'client_secret' => '1Oo4L3YRMdpxXEw1fMYOcfLMLddQ7AwtbOZTlI7d'
        ];

        if (in_array($request->header('Authorization'), $credentials)) {
            return $next($request);
        }

        abort(Response::HTTP_UNAUTHORIZED);
    }
}
