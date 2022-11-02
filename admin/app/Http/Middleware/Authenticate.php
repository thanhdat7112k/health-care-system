<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if ($request->is('client') || $request->is('client/*')) {
            return route('client.login');
        }
        if ($request->is('admin') || $request->is('admin/*')) {
            return route('admin.login');
        }
        if ($request->is('api') || $request->is('api/*') || $request->expectsJson()) {
            abort(response()->json(['message' => 'Unauthorized'], 401));
        }
        abort(403);
    }
}
