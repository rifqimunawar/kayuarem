<?php

namespace App\Http\Controllers\Server;

use App\Helpers\Fungsi;
use App\Http\Controllers\Controller;
use App\Models\Categori_Project;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoriProjectController extends Controller
{
  public function index()
  {
    $alert = 'Delete Data!';
    $text = "Are you sure you want to delete?";
    confirmDelete($alert, $text);

    $title = 'Category Project';
    $descriptionTitle = 'List data category project';
    $data = Categori_Project::latest()->get();

    return view(
      'server/categori-project/index',
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
      'server/categori-project/form',
      [
        'title' => $title,
        'data' => null,
      ]
    );
  }
  public function edit($id)
  {
    $title = "Form Update";
    $data = Categori_Project::findOrFail($id);

    return view(
      'server/categori-project/form',
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
      $newFileName = 'categori_project_' . now()->format('YmdHis') . '.' . $extension;
      $request->file('img')->move(public_path('img'), $newFileName);
      $data['img'] = $newFileName;
    }

    if ($request->filled('categori')) {
      $data['categori'] = Fungsi::inputTranslate($request->categori);
    }
    // Cek apakah ini update atau create
    if (!empty($request->id)) {
      $dataUpate = Categori_Project::findOrFail($request->id);
      $dataUpate->update($data);
    } else {
      $data = Categori_Project::create($data);
    }

    Alert::success('Success', 'Data berhasil ' . (!empty($request->id) ? 'diupdate' : 'disimpan'));
    return redirect()->route('index.categoriProject');
  }
  public function destroy($id)
  {

    $data = Categori_Project::findOrFail($id);
    $data->save();

    // Jika data tidak boleh dihapus ketika ada relasi database lain uhuy
    if ($data->project()->count() > 0) {
      Alert::error('Oops....', 'Data tidak dapat dihapus karena memiliki produk');
      return redirect()->route('index.categoriProject');
    }

    $data->delete();
    Alert::success('Success', 'Data berhasil dihapus');
    return redirect()->route('index.categoriProject');
  }
}
