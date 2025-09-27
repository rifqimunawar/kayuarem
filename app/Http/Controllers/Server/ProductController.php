<?php

namespace App\Http\Controllers\Server;

use App\Helpers\Fungsi;
use App\Http\Controllers\Controller;
use App\Models\Categori_Products;
use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
  public function index()
  {
    $alert = 'Delete Data!';
    $text = "Are you sure you want to delete?";
    confirmDelete($alert, $text);

    $title = 'Product Page';
    $descriptionTitle = 'List data Product';
    $data = Product::with('category')->latest()->get();

    return view(
      'server/product/index',
      [
        'title' => $title,
        'descriptionTitle' => $descriptionTitle,
        'data' => $data,
      ]
    );
  }
  public function create()
  {
    $dataCategory = Categori_Products::latest()->get();
    $title = "Form Create";
    return view(
      'server/product/form',
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
    $data = Product::findOrFail($id);
    $dataCategory = Categori_Products::latest()->get();
    return view(
      'server/product/show',
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
    $data = Product::findOrFail($id);
    $dataCategory = Categori_Products::latest()->get();
    return view(
      'server/product/form',
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
      $newFileName = 'product_' . now()->format('YmdHis') . '.' . $extension;
      $request->file('img')->move(public_path('img'), $newFileName);
      $data['img'] = $newFileName;
    }

    if ($request->filled('nama_produk')) {
      $data['nama_produk'] = Fungsi::inputTranslate($request->nama_produk);
    }
    if ($request->filled('deskripsi')) {
      $data['deskripsi'] = Fungsi::inputTranslate($request->deskripsi);
    }

    // Cek apakah ini update atau create
    if (!empty($request->id)) {
      $dataUpate = Product::findOrFail($request->id);
      $dataUpate->update($data);
    } else {
      $data = Product::create($data);
    }

    Alert::success('Success', 'Data berhasil ' . (!empty($request->id) ? 'diupdate' : 'disimpan'));
    return redirect()->route('index.product');
  }
  public function destroy($id)
  {

    $data = Product::findOrFail($id);
    $data->save();

    // Jika data tidak boleh dihapus ketika ada relasi database lain uhuy
    // if ($data->produks()->count() > 0) {
    //   Alert::error('Oops....', 'Data tidak dapat dihapus karena memiliki produk');
    //   return redirect()->route('bahan.index');
    // }

    $data->delete();
    Alert::success('Success', 'Data berhasil dihapus');
    return redirect()->route('index.product');
  }
}
