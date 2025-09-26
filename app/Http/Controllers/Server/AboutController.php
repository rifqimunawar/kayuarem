<?php

namespace App\Http\Controllers\Server;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
  public function edit()
  {
    $title = "Form Update";
    $data = About::findOrFail(1);

    return view(
      'server/about/form',
      [
        'title' => $title,
        'data' => $data,
      ]
    );
  }
  public function store(Request $request)
  {
    $data = $request->all();

    if ($request->hasFile('img')) {
      $extension = $request->img->getClientOriginalExtension();
      $newFileName = 'about_' . now()->format('YmdHis') . '.' . $extension;
      $request->file('img')->move(public_path('img'), $newFileName);
      $data['img'] = $newFileName;
    }

    if ($request->hasFile('img_slogan')) {
      $extension = $request->img_slogan->getClientOriginalExtension();
      $newFileName = 'img_slogan_' . now()->format('YmdHis') . '.' . $extension;
      $request->file('img_slogan')->move(public_path('img'), $newFileName);
      $data['img_slogan'] = $newFileName;
    }

    // Cek apakah ini update atau create
    if (!empty($request->id)) {
      $dataUpate = About::findOrFail($request->id);
      $dataUpate->update($data);
    } else {
      $data = About::create($data);
    }

    Alert::success('Success', 'Data berhasil ' . (!empty($request->id) ? 'diupdate' : 'disimpan'));
    return redirect()->route('edit.about');
  }
}
