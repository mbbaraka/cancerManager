<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check() && $guard == 'uci') {
                return redirect()->route('uci-home');
            }elseif (Auth::guard($guard)->check() && $guard == 'web') {
                return redirect()->route('/');
            }
            // switch ($guard) {
            //     case 'uci':
            //       if (Auth::guard($guard)->check()) {
            //         return redirect()->route('uci-home');
            //       }

            //     default:
            //       if (Auth::guard($guard)->check()) {
            //           return redirect('/');
            //       }
            //       break;
            //   }
              return $next($request);
        }

        return $next($request);
    }
}
