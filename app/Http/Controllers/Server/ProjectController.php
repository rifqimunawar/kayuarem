<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\Categori_Project;
use App\Models\Project;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProjectController extends Controller
{
  public function index()
  {
    $alert = 'Delete Data!';
    $text = "Are you sure you want to delete?";
    confirmDelete($alert, $text);

    $title = 'Project Page';
    $descriptionTitle = 'List data Project';
    $data = Project::with('category')->latest()->get();

    return view(
      'server/project/index',
      [
        'title' => $title,
        'descriptionTitle' => $descriptionTitle,
        'data' => $data,
      ]
    );
  }
  public function create()
  {
    $dataCategory = Categori_Project::latest()->get();
    $title = "Form Create";
    return view(
      'server/project/form',
      [
        'title' => $title,
        'data' => null,
        'dataCategory' => $dataCategory,
      ]
    );
  }
  public function show($id)
  {
    $title = "Data Detail";
    $data = Project::findOrFail($id);
    $dataCategory = Categori_Project::latest()->get();
    return view(
      'server/project/show',
      [
        'title' => $title,
        'data' => $data,
        'dataCategory' => $dataCategory,
      ]
    );
  }
  public function edit($id)
  {
    $title = "Form Update";
    $data = Project::findOrFail($id);
    $dataCategory = Categori_Project::latest()->get();
    return view(
      'server/project/form',
      [
        'title' => $title,
        'data' => $data,
        'dataCategory' => $dataCategory,
      ]
    );
  }
  public function store(Request $request)
  {
    $data = $request->all();

    if ($request->hasFile('img')) {
      $extension = $request->img->getClientOriginalExtension();
      $newFileName = 'project_' . now()->format('YmdHis') . '.' . $extension;
      $request->file('img')->move(public_path('img'), $newFileName);
      $data['img'] = $newFileName;
    }

    // Cek apakah ini update atau create
    if (!empty($request->id)) {
      $dataUpate = Project::findOrFail($request->id);
      $dataUpate->update($data);
    } else {
      $data = Project::create($data);
    }

    Alert::success('Success', 'Data berhasil ' . (!empty($request->id) ? 'diupdate' : 'disimpan'));
    return redirect()->route('index.project');
  }
  public function destroy($id)
  {

    $data = Project::findOrFail($id);
    $data->save();

    // Jika data tidak boleh dihapus ketika ada relasi database lain uhuy
    // if ($data->produks()->count() > 0) {
    //   Alert::error('Oops....', 'Data tidak dapat dihapus karena memiliki produk');
    //   return redirect()->route('bahan.index');
    // }

    $data->delete();
    Alert::success('Success', 'Data berhasil dihapus');
    return redirect()->route('index.project');
  }
}
