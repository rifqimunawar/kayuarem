<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
  public function handle($request, Closure $next)
  {
    if ($request->has('lang')) {
      $locale = $request->get('lang');
      if (in_array($locale, ['en', 'id'])) {
        App::setLocale($locale);
        Session::put('locale', $locale);
      }
    } elseif (Session::has('locale')) {
      App::setLocale(Session::get('locale'));
    }

    return $next($request);
  }
}
