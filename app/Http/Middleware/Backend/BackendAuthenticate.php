<?php

namespace App\Http\Middleware\Backend;

use Closure;

class BackendAuthenticate
{
    public function handle($request, Closure $next)
    {
        // Ignore request to login page
        if ($request->is('*login')) {
            return $next($request);
        }

        if ($this->_check()) {
            return redirect()->route('backend.login');
        }

        return $next($request);
    }

    protected function _check()
    {
        //not logged in or deleted
        return !getCurrentAdminEntity() || getCurrentAdminEntity()->{getSystemConfig('deleted_at_column')};
    }
}
