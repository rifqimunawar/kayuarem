<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class UserManagementCont extends Controller
{
  public function index()
  {
    $alert = 'Delete Data!';
    $text = "Are you sure you want to delete?";
    confirmDelete($alert, $text);

    $title = 'Data User';
    $descriptionTitle = 'List data user';
    $data = User::latest()->get();

    return view(
      'server/user-management/index',
      [
        'title' => $title,
        'descriptionTitle' => $descriptionTitle,
        'data' => $data,
      ]
    );
  }
  public function create()
  {

    $title = "Form Create";
    return view(
      'server/user-management/form',
      [
        'title' => $title,
        'data' => null,
      ]
    );
  }
  public function edit($id)
  {
    $title = "Form Update";
    $data = User::findOrFail($id);

    return view(
      'server/user-management/form',
      [
        'title' => $title,
        'data' => $data,
      ]
    );
  }



  public function store(Request $request)
  {
    try {
      // Determine if this is an update or create operation
      $isUpdate = !empty($request->id);
      $user = $isUpdate ? User::findOrFail($request->id) : null;

      // Custom validation rules
      $rules = [
        'name' => [
          'required',
          'string',
          'min:2',
          'max:100',
          'regex:/^[a-zA-Z\s]+$/' // Only letters and spaces
        ],
        'username' => [
          'required',
          'string',
          'min:3',
          'max:50',
          'regex:/^[a-zA-Z0-9_]+$/', // Only letters, numbers, and underscores
          Rule::unique('users', 'username')->ignore($user ? $user->id : null)
        ],
        'email' => [
          'required',
          'email:rfc,dns',
          'max:255',
          Rule::unique('users', 'email')->ignore($user ? $user->id : null)
        ],
        'img' => [
          'nullable',
          'image',
          'mimes:jpeg,jpg,png',
          'max:2048' // Max 2MB
        ]
      ];

      // Password validation rules
      if (!$isUpdate) {
        // For new users, password is required
        $rules['password'] = [
          'required',
          'string',
          'min:5',
          'max:255',
          'confirmed' // This will check password_confirmation automatically
        ];
        $rules['password_confirmation'] = [
          'required',
          'string',
          'min:5',
          'same:password'
        ];
      } else {
        // For updates, password is optional but if provided must be confirmed
        $rules['password'] = [
          'nullable',
          'string',
          'min:5',
          'max:255',
          'confirmed'
        ];
        if ($request->filled('password')) {
          $rules['password_confirmation'] = [
            'required',
            'string',
            'min:5',
            'same:password'
          ];
        }
      }

      // Custom error messages

      $messages = [
        'name.required' => 'Nama lengkap harus diisi.',
        'name.min' => 'Nama minimal 2 karakter.',
        'name.max' => 'Nama maksimal 100 karakter.',
        'name.regex' => 'Nama hanya boleh mengandung huruf dan spasi.',

        'username.required' => 'Username harus diisi.',
        'username.min' => 'Username minimal 3 karakter.',
        'username.max' => 'Username maksimal 50 karakter.',
        'username.regex' => 'Username hanya boleh mengandung huruf, angka, dan underscore.',
        'username.unique' => 'Username sudah digunakan.',

        'email.required' => 'Email harus diisi.',
        'email.email' => 'Format email tidak valid.',
        'email.max' => 'Email maksimal 255 karakter.',
        'email.unique' => 'Email sudah digunakan.',

        'password.required' => 'Password harus diisi.',
        'password.min' => 'Password minimal 5 karakter.',
        'password.max' => 'Password maksimal 255 karakter.',
        'password.confirmed' => 'Konfirmasi password tidak cocok.',

        'password_confirmation.required' => 'Konfirmasi password harus diisi.',
        'password_confirmation.same' => 'Konfirmasi password tidak cocok.',

        'img.image' => 'File harus berupa gambar.',
        'img.mimes' => 'Format gambar harus jpeg, jpg, atau png.',
        'img.max' => 'Ukuran gambar maksimal 2MB.',
      ];


      $validator = Validator::make($request->all(), $rules, $messages);

      if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
      }

      // Create or update user
      if (!$user) {
        $user = new User();
      }

      $user->name = $request->name;
      $user->username = $request->username;
      $user->email = $request->email;

      if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
      }

      // Handle image upload
      if ($request->hasFile('img')) {
        $image = $request->file('img');
        $filename = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('img/users'), $filename);
        $user->img = $filename;
      }

      $user->save();

      Alert::success('Success', 'Data berhasil ' . (!empty($request->id) ? 'diupdate' : 'disimpan'));

      return redirect()->route('index.user-management')
        ->with('success', $isUpdate ? 'Data user berhasil diupdate.' : 'Data user berhasil ditambahkan.');

    } catch (\Exception $e) {
      Log::error('User store error: ' . $e->getMessage(), [
        'trace' => $e->getTraceAsString()
      ]);

      return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
    }
  }

  public function destroy($id)
  {
    $data = User::findOrFail($id);

    // Cek apakah user yang akan dihapus sedang login
    if (Auth::check() && Auth::id() === $data->id) {
      Alert::error('Oops....', 'Data tidak dapat dihapus karena user sedang login.');
      return redirect()->route('index.user-management');
    }

    // Hapus user (soft delete)
    $data->delete();

    Alert::success('Success', 'Data berhasil dihapus');
    return redirect()->route('index.user-management');
  }

}
