<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TestimonialController extends Controller
{
  public function index()
  {
    $alert = 'Delete Data!';
    $text = "Are you sure you want to delete?";
    confirmDelete($alert, $text);

    $title = 'Testimonial Section';
    $descriptionTitle = 'List data Testimonial';
    $data = Testimonial::latest()->get();

    return view(
      'server/testimonial/index',
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
      'server/testimonial/form',
      [
        'title' => $title,
        'data' => null,
      ]
    );
  }
  public function edit($id)
  {
    $title = "Form Update";
    $data = Testimonial::findOrFail($id);

    return view(
      'server/testimonial/form',
      [
        'title' => $title,
        'data' => $data,
      ]
    );
  }
  public function show($id)
  {
    $title = "Detail Testimonial";
    $data = Testimonial::findOrFail($id);

    return view(
      'server/testimonial/show',
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
      $newFileName = 'testimonial_' . now()->format('YmdHis') . '.' . $extension;
      $request->file('img')->move(public_path('img'), $newFileName);
      $data['img'] = $newFileName;
    }

    // Cek apakah ini update atau create
    if (!empty($request->id)) {
      $dataUpate = Testimonial::findOrFail($request->id);
      $dataUpate->update($data);
    } else {
      $data = Testimonial::create($data);
    }

    Alert::success('Success', 'Data berhasil ' . (!empty($request->id) ? 'diupdate' : 'disimpan'));
    return redirect()->route('index.testimonial');
  }
  public function destroy($id)
  {

    $data = Testimonial::findOrFail($id);
    $data->save();

    // Jika data tidak boleh dihapus ketika ada relasi database lain uhuy
    // if ($data->produks()->count() > 0) {
    //   Alert::error('Oops....', 'Data tidak dapat dihapus karena memiliki produk');
    //   return redirect()->route('bahan.index');
    // }

    $data->delete();
    Alert::success('Success', 'Data berhasil dihapus');
    return redirect()->route('index.testimonial');
  }
}
