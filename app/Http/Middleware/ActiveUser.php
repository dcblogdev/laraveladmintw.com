<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ActiveUser
{
    public function handle(Request $request, Closure $next)
    {
        //if user is not active log the user out
        if (! auth()->user()->is_active) {

            flash('Your account has been deactivated. You cannot login.')->warning();
            auth()->logout();

            return redirect(route('login'));
        }

        if (session('2fa-login') === true && url()->current() !== url('admin/two-fa')) {
            return redirect('admin/two-fa');
        }

        if (session('2fa-setup') === true && url()->current() !== url('admin/two-fa-setup')) {
            return redirect('admin/two-fa-setup');
        }

        return $next($request);
    }
}
