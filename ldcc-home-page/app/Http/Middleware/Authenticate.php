<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            $uri = $request->path();
            if ($this->isAdminName($uri) !== false) {
                return route('admin.auth.login');
            }
            return route('login');
        }
    }
    public function isAdminName($routeName)
    {
        return strpos($routeName, 'admin');
    }
}
