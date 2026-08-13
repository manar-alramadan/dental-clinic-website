<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if ($request->expectsJson()) {
            return null;
        }

        // If the request is for admin routes, redirect to the admin login route
        if ($request->is('admin') || $request->is('admin/*')) {
            return route('admin.login');
        }

        // Default redirect for other unauthenticated requests
        return route('home');
    }
}
