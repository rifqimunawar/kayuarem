<?php

namespace App\Http\Controllers\Server;

use App\Helpers\Fungsi;
use App\Http\Controllers\Controller;
use App\Models\Categori_News;
use App\Models\News;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class NewsController extends Controller
{
  public function index()
  {
    $alert = 'Delete Data!';
    $text = "Are you sure you want to delete?";
    confirmDelete($alert, $text);

    $title = 'News Page';
    $descriptionTitle = 'List data News';
    $data = News::with('category')->latest()->get();
    return view(
      'server/news/index',
      [
        'title' => $title,
        'descriptionTitle' => $descriptionTitle,
        'data' => $data,
      ]
    );
  }
  public function create()
  {
    $dataCategory = Categori_News::latest()->get();
    $title = "Form Create";
    return view(
      'server/news/form',
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
    $data = News::findOrFail($id);
    $dataCategory = Categori_News::latest()->get();
    return view(
      'server/news/show',
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
    $data = News::findOrFail($id);
    $dataCategory = Categori_News::latest()->get();

    return view(
      'server/news/form',
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
      $newFileName = 'news_' . now()->format('YmdHis') . '.' . $extension;
      $request->file('img')->move(public_path('img'), $newFileName);
      $data['img'] = $newFileName;
    }

    if ($request->filled('judul')) {
      $data['judul'] = Fungsi::inputTranslate($request->judul);
    }
    if ($request->filled('deskripsi')) {
      $data['deskripsi'] = Fungsi::inputTranslate($request->deskripsi);
    }

    // Cek apakah ini update atau create
    if (!empty($request->id)) {
      $dataUpate = News::findOrFail($request->id);
      $dataUpate->update($data);
    } else {
      $data = News::create($data);
    }

    Alert::success('Success', 'Data berhasil ' . (!empty($request->id) ? 'diupdate' : 'disimpan'));
    return redirect()->route('index.news');
  }
  public function destroy($id)
  {

    $data = News::findOrFail($id);
    $data->save();

    // Jika data tidak boleh dihapus ketika ada relasi database lain uhuy
    // if ($data->produks()->count() > 0) {
    //   Alert::error('Oops....', 'Data tidak dapat dihapus karena memiliki produk');
    //   return redirect()->route('bahan.index');
    // }

    $data->delete();
    Alert::success('Success', 'Data berhasil dihapus');
    return redirect()->route('index.news');
  }
}
