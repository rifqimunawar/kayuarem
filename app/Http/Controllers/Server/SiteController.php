<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\Site;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SiteController extends Controller
{
  public function edit()
  {
    $title = "Form Update Situs Website";
    $data = Site::findOrFail(1);

    return view(
      'server/site/form',
      [
        'title' => $title,
        'data' => $data,
      ]
    );
  }
  public function store(Request $request)
  {
    $data = $request->all();

    if ($request->hasFile('logo')) {
      $extension = $request->logo->getClientOriginalExtension();
      $newFileName = 'logo_' . now()->format('YmdHis') . '.' . $extension;
      $request->file('logo')->move(public_path('img'), $newFileName);
      $data['logo'] = $newFileName;
    }

    // Cek apakah ini update atau create
    if (!empty($request->id)) {
      $dataUpate = Site::findOrFail($request->id);
      $dataUpate->update($data);
    } else {
      $data = Site::create($data);
    }

    Alert::success('Success', 'Data berhasil ' . (!empty($request->id) ? 'diupdate' : 'disimpan'));
    return redirect()->route('edit.site');
  }
}
