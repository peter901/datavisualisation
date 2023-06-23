<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class XApiSecretMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $apiKey = $request->header('X-API-SECRET');

        $request->headers->set('Authorization', "Bearer {$apiKey}");
        $request->headers->set('Accept', "application/json");
    
        // Generate a JWT token
        $token = JWTAuth::parseToken();

        // Authenticate the token
        $user = $token->authenticate();

        // Attach the authenticated user to the request
        $request->merge(['user' => $user]);
        return $next($request);
    }
}
