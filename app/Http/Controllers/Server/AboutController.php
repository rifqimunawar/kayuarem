<?php

namespace App\Http\Controllers\Server;

use App\Helpers\Fungsi;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Stichoza\GoogleTranslate\GoogleTranslate;

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

    // ===== Auto Translate (tambahan saja) =====
    if ($request->filled('deskripsi')) {
      $data['deskripsi'] = Fungsi::inputTranslate($request->deskripsi);
    }
    if ($request->filled('deskripsi_slogan')) {
      $data['deskripsi_slogan'] = Fungsi::inputTranslate($request->deskripsi_slogan);
    }
    if ($request->filled('visi')) {
      $data['visi'] = Fungsi::inputTranslate($request->visi);
    }
    if ($request->filled('misi')) {
      $data['misi'] = Fungsi::inputTranslate($request->misi);
    }
    if ($request->filled('slogan')) {
      $data['slogan'] = Fungsi::inputTranslate($request->slogan);
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
