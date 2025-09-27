<?php

namespace App\Http\Controllers\Server;

use App\Helpers\Fungsi;
use App\Http\Controllers\Controller;
use App\Models\Milestone;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MileStoneController extends Controller
{
  public function index()
  {
    $alert = 'Delete Data!';
    $text = "Are you sure you want to delete?";
    confirmDelete($alert, $text);

    $title = 'Milestone Page';
    $descriptionTitle = 'List data milstone';
    $data = Milestone::latest()->get();

    return view(
      'server/milestone/index',
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
      'server/milestone/form',
      [
        'title' => $title,
        'data' => null,
      ]
    );
  }
  public function edit($id)
  {
    $title = "Form Update";
    $data = Milestone::findOrFail($id);

    return view(
      'server/milestone/form',
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
      $newFileName = 'client_' . now()->format('YmdHis') . '.' . $extension;
      $request->file('img')->move(public_path('img'), $newFileName);
      $data['img'] = $newFileName;
    }

    if ($request->filled('deskripsi')) {
      $data['deskripsi'] = Fungsi::inputTranslate($request->deskripsi);
    }

    // Cek apakah ini update atau create
    if (!empty($request->id)) {
      $dataUpate = Milestone::findOrFail($request->id);
      $dataUpate->update($data);
    } else {
      $data = Milestone::create($data);
    }

    Alert::success('Success', 'Data berhasil ' . (!empty($request->id) ? 'diupdate' : 'disimpan'));
    return redirect()->route('index.milestone');
  }
  public function destroy($id)
  {

    $data = Milestone::findOrFail($id);
    $data->save();

    // Jika data tidak boleh dihapus ketika ada relasi database lain uhuy
    // if ($data->produks()->count() > 0) {
    //   Alert::error('Oops....', 'Data tidak dapat dihapus karena memiliki produk');
    //   return redirect()->route('bahan.index');
    // }

    $data->delete();
    Alert::success('Success', 'Data berhasil dihapus');
    return redirect()->route('index.milestone');
  }
}
