<?php

namespace App\Http\Middleware;

use App\Models\OauthClient;
use Closure;

class OAuthClientMiddleware
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
        if(!$request->header('client_id') || !$request->header('client_secret')){
            return response([
                'message' => 'client_id and client_secret is required'
            ], 401);
        }

        $result = OauthClient::where('client_id', $request->header('client_id'))
                ->where('client_secret', $request->header('client_secret'))
                ->first();

        if(!$result){
            return response([
                'message' => 'Invalid client_id and client_secret'
            ], 401);
        }

        return $next($request);
    }
}
