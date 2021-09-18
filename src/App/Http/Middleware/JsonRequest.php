<?php

namespace Sparkouttech\UserMultiAuth\App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class JsonRequest
{
    public function handle($request, Closure $next)
    {
        $request->headers->set('Accept', 'application/json');
        return $next($request);
    }
}