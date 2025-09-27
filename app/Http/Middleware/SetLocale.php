<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
  public function handle($request, Closure $next)
  {
    // 1️⃣ Cek query string
    if ($request->has('lang')) {
      $locale = $request->get('lang');
      if (in_array($locale, ['en', 'id'])) {
        App::setLocale($locale);
        Session::put('locale', $locale);
      }
    }
    // 2️⃣ Cek session
    elseif (Session::has('locale')) {
      App::setLocale(Session::get('locale'));
    }
    // 3️⃣ Deteksi bahasa browser
    else {
      $browserLocale = substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2);
      $browserLocale = in_array($browserLocale, ['en', 'id']) ? $browserLocale : config('app.locale');

      App::setLocale($browserLocale);
      Session::put('locale', $browserLocale);
    }

    return $next($request);
  }
}
