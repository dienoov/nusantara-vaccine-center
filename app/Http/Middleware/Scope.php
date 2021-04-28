<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;

class Scope
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $scope)
    {
        if (!$request->user())
            return new AuthenticationException();

        if (!$request->user()->tokenCan($scope))
            return response([
                'message' => 'Unauthorized',
            ], 403);

        return $next($request);
    }
}
