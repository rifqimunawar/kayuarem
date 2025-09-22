<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\Categori_News;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoriNewsController extends Controller
{
  public function index()
  {
    $alert = 'Delete Data!';
    $text = "Are you sure you want to delete?";
    confirmDelete($alert, $text);

    $title = 'Category News';
    $descriptionTitle = 'List data category news';
    $data = Categori_News::latest()->get();

    return view(
      'server/categori-news/index',
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
      'server/categori-news/form',
      [
        'title' => $title,
        'data' => null,
      ]
    );
  }
  public function edit($id)
  {
    $title = "Form Update";
    $data = Categori_News::findOrFail($id);

    return view(
      'server/categori-news/form',
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
      $newFileName = 'categori_news_' . now()->format('YmdHis') . '.' . $extension;
      $request->file('img')->move(public_path('img'), $newFileName);
      $data['img'] = $newFileName;
    }

    // Cek apakah ini update atau create
    if (!empty($request->id)) {
      $dataUpate = Categori_News::findOrFail($request->id);
      $dataUpate->update($data);
    } else {
      $data = Categori_News::create($data);
    }

    Alert::success('Success', 'Data berhasil ' . (!empty($request->id) ? 'diupdate' : 'disimpan'));
    return redirect()->route('index.categoriNews');
  }
  public function destroy($id)
  {

    $data = Categori_News::findOrFail($id);
    $data->save();

    // Jika data tidak boleh dihapus ketika ada relasi database lain uhuy
    if ($data->news()->count() > 0) {
      Alert::error('Oops....', 'Data tidak dapat dihapus karena memiliki produk');
      return redirect()->route('index.categoriNews');
    }

    $data->delete();
    Alert::success('Success', 'Data berhasil dihapus');
    return redirect()->route('index.categoriNews');
  }
}
