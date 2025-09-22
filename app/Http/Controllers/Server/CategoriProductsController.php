<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\Categori_Products;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoriProductsController extends Controller
{
  public function index()
  {
    $alert = 'Delete Data!';
    $text = "Are you sure you want to delete?";
    confirmDelete($alert, $text);

    $title = 'Category Product';
    $descriptionTitle = 'List data category product';
    $data = Categori_Products::latest()->get();

    return view(
      'server/categori-product/index',
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
      'server/categori-product/form',
      [
        'title' => $title,
        'data' => null,
      ]
    );
  }
  public function edit($id)
  {
    $title = "Form Update";
    $data = Categori_Products::findOrFail($id);

    return view(
      'server/categori-product/form',
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
      $newFileName = 'categori_product_' . now()->format('YmdHis') . '.' . $extension;
      $request->file('img')->move(public_path('img'), $newFileName);
      $data['img'] = $newFileName;
    }

    // Cek apakah ini update atau create
    if (!empty($request->id)) {
      $dataUpate = Categori_Products::findOrFail($request->id);
      $dataUpate->update($data);
    } else {
      $data = Categori_Products::create($data);
    }

    Alert::success('Success', 'Data berhasil ' . (!empty($request->id) ? 'diupdate' : 'disimpan'));
    return redirect()->route('index.categoriProduct');
  }
  public function destroy($id)
  {

    $data = Categori_Products::findOrFail($id);
    $data->save();

    // Jika data tidak boleh dihapus ketika ada relasi database lain uhuy
    if ($data->product()->count() > 0) {
      Alert::error('Oops....', 'Data tidak dapat dihapus karena memiliki produk');
      return redirect()->route('index.categoriProduct');
    }

    $data->delete();
    Alert::success('Success', 'Data berhasil dihapus');
    return redirect()->route('index.categoriProduct');
  }
}
