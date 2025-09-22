<?php

namespace App\Http\Controllers\Client;

use App\Models\Categori_News;
use App\Models\Categori_Products;
use App\Models\Home;
use App\Models\News;
use App\Models\Team;
use App\Models\About;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categori_Project;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Quote;
use App\Models\Testimonial;
use RealRashid\SweetAlert\Facades\Alert;

class AppController extends Controller
{
  public function home()
  {
    $dataHome = Home::latest()->get();
    $dataAbout = About::first();
    $dataTeam = Team::all();
    $dataServices = Service::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();
    return view(
      'client/pages/homepage',
      [
        'dataHome' => $dataHome,
        'dataAbout' => $dataAbout,
        'dataTeam' => $dataTeam,
        'dataServices' => $dataServices,
        'dataTestimonial' => $dataTestimonial,
      ]
    );
  }
  public function about()
  {
    $dataHome = Home::latest()->get();
    $dataAbout = About::first();
    $dataTeam = Team::all();
    $dataServices = Service::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();

    return view(
      'client/pages/aboutpage',
      [
        'dataHome' => $dataHome,
        'dataAbout' => $dataAbout,
        'dataTeam' => $dataTeam,
        'dataServices' => $dataServices,
        'dataTestimonial' => $dataTestimonial,
      ]
    );
  }
  public function services()
  {
    $dataHome = Home::latest()->get();
    $dataAbout = About::first();
    $dataTeam = Team::all();
    $dataServices = Service::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();
    return view(
      'client/pages/servicespage',
      [
        'dataHome' => $dataHome,
        'dataAbout' => $dataAbout,
        'dataTeam' => $dataTeam,
        'dataServices' => $dataServices,
        'dataTestimonial' => $dataTestimonial,
      ]
    );
  }
  public function product()
  {
    $dataHome = Home::latest()->get();
    $dataAbout = About::first();
    $dataTeam = Team::all();
    $dataServices = Service::latest()->get();
    $dataProduct = Product::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();
    return view(

      'client/pages/productpage',
      [
        'dataHome' => $dataHome,
        'dataAbout' => $dataAbout,
        'dataTeam' => $dataTeam,
        'dataServices' => $dataServices,
        'dataProduct' => $dataProduct,
        'dataTestimonial' => $dataTestimonial,
      ]
    );
  }
  public function project()
  {
    $dataHome = Home::latest()->get();
    $dataAbout = About::first();
    $dataTeam = Team::all();
    $dataServices = Service::latest()->get();
    $dataProduct = Product::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();
    $dataProject = Project::with('category')->latest()->get();
    $dataCatProject = Categori_Project::latest()->get();
    $dataProduct = Product::with('category')->latest()->get();
    $dataCatProduct = Categori_Products::latest()->get();
    $dataNews = News::with('category')->latest()->get();
    $dataCatNews = Categori_News::latest()->get();
    return view(
      'client/pages/projectpage',
      [
        'dataHome' => $dataHome,
        'dataAbout' => $dataAbout,
        'dataTeam' => $dataTeam,
        'dataServices' => $dataServices,
        'dataProduct' => $dataProduct,
        'dataTestimonial' => $dataTestimonial,
        'dataProject' => $dataProject,
        'dataCatProject' => $dataCatProject,
        'dataCatProduct' => $dataCatProduct,
        'dataCatNews' => $dataCatNews,
        'dataNews' => $dataNews,
      ]
    );
  }
  public function contact()
  {
    $dataHome = Home::latest()->get();
    return view(
      'client/pages/contactpage',
      [
        'dataHome' => $dataHome
      ]
    );
  }
  public function storeQuotation(Request $request)
  {
    $data = $request->all();
    // Cek apakah ini update atau create
    if (!empty($request->id)) {
      $dataUpate = Quote::findOrFail($request->id);
      $dataUpate->update($data);
    } else {
      $data = Quote::create($data);
    }

    Alert::success('Success', 'Quotation berhasil ' . (!empty($request->id) ? 'diupdate' : 'dikirimkan'));
    return redirect()->route('homepage');
  }
  public function storeContact(Request $request)
  {
    $data = $request->all();
    // Cek apakah ini update atau create
    if (!empty($request->id)) {
      $dataUpate = Contact::findOrFail($request->id);
      $dataUpate->update($data);
    } else {
      $data = Contact::create($data);
    }

    Alert::success('Success', 'Pesan berhasil ' . (!empty($request->id) ? 'diupdate' : 'dikirim'));
    return redirect()->route('homepage');
  }
}
