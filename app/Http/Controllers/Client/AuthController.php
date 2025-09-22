<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use Illuminate\Support\FacadesLog;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{

  public function login()
  {
    if (Auth::check()) {
      return redirect()->route('dashboard');
    }

    return view('auth.login');
  }

  public function loginStore(Request $request)
  {
    try {
      // Custom validation rules
      $validator = Validator::make($request->all(), [
        'username' => [
          'required',
          'string',
          'min:3',
          'max:50',
          'regex:/^[a-zA-Z0-9_]+$/' // Only letters, numbers, and underscores
        ],
        'password' => [
          'required',
          'string',
          'min:5',
          'max:255'
        ],
        'remember' => 'nullable' // biarkan nullable karena checkbox bisa tidak dikirim
      ], [
        'username.required' => 'Username is required',
        'username.min' => 'Username must be at least 3 characters long',
        'username.max' => 'Username cannot exceed 50 characters',
        'username.regex' => 'Username can only contain letters, numbers, and underscores',
        'password.required' => 'Password is required',
        'password.min' => 'Password must be at least 5 characters long',
        'password.max' => 'Password cannot exceed 255 characters'
      ]);

      if ($validator->fails()) {
        return response()->json([
          'success' => false,
          'message' => 'Validation failed',
          'errors' => $validator->errors()
        ], 422);
      }

      $credentials = [
        'username' => $request->username,
        'password' => $request->password
      ];

      // Ambil remember: jika dikirim "on" ubah jadi true, jika tidak dikirim maka false
      $remember = $request->has('remember') && $request->remember === 'on';

      // Rate limiting (optional)
      $key = 'login_attempts:' . $request->ip();
      $attempts = cache()->get($key, 0);

      if ($attempts >= 5) {
        return response()->json([
          'success' => false,
          'message' => 'Too many login attempts. Please try again in 15 minutes.'
        ], 429);
      }

      // Attempt authentication
      if (Auth::attempt($credentials, $remember)) {
        // Clear failed attempts
        cache()->forget($key);

        $request->session()->regenerate();

        // Log successful login
        Log::info('User logged in', [
          'user_id' => Auth::id(),
          'username' => Auth::user()->username,
          'ip' => $request->ip(),
          'user_agent' => $request->userAgent()
        ]);

        return response()->json([
          'success' => true,
          'message' => 'Login successful',
          'redirect' => route('dashboard'),
          'user' => [
            'id' => Auth::user()->id,
            'username' => Auth::user()->username,
            'email' => Auth::user()->email,
            'name' => Auth::user()->name ?? Auth::user()->username
          ]
        ]);
      } else {
        // Increment failed attempts
        cache()->put($key, $attempts + 1, now()->addMinutes(15));

        Log::warning('Failed login attempt', [
          'username' => $request->username,
          'ip' => $request->ip(),
          'user_agent' => $request->userAgent()
        ]);

        return response()->json([
          'success' => false,
          'message' => 'Invalid username or password',
          'attempts_remaining' => max(0, 4 - $attempts)
        ], 401);
      }
    } catch (\Exception $e) {
      Log::error('Login error: ' . $e->getMessage(), [
        'username' => $request->username ?? 'unknown',
        'ip' => $request->ip(),
        'trace' => $e->getTraceAsString()
      ]);

      return response()->json([
        'success' => false,
        'message' => 'An unexpected error occurred. Please try again.',
        // 'message' => $e->getMessage(),
        'trace' => $e->getTraceAsString()
      ], 500);
    }
  }


  public function logout(Request $request)
  {
    if (Auth::check()) {
      // Log logout
      Log::info('User logged out', [
        'user_id' => Auth::id(),
        'username' => Auth::user()->username,
        'ip' => $request->ip()
      ]);

      Auth::logout();

      $request->session()->invalidate();
      $request->session()->regenerateToken();
    }

    Alert::Info('Terima Kasih', 'Terima kasih sudah berkunjung!!');
    return redirect()->route('login')->with('success', 'You have been logged out successfully.');
  }

  // Optional: Method to check authentication status via AJAX
  public function checkAuth()
  {
    return response()->json([
      'authenticated' => Auth::check(),
      'user' => Auth::check() ? [
        'id' => Auth::user()->id,
        'username' => Auth::user()->username,
        'email' => Auth::user()->email,
        'name' => Auth::user()->name ?? Auth::user()->username
      ] : null
    ]);
  }
}

