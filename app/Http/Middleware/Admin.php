<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Admin extends Middleware
{
  public function handle($request, Closure $next, ...$guards)
  {
    if (auth()->check() && auth()->user()->is_admin) {
      return $next($request);
    }

    abort(403, 'Unauthorized');
  }
}
