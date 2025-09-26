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
use App\Models\Client;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Quote;
use App\Models\Testimonial;
use RealRashid\SweetAlert\Facades\Alert;

class AppController extends Controller
{
  public function home()
  {
    $dataTeam = Team::all();
    $dataAbout = About::first();
    $dataHome = Home::latest()->get();
    $dataClient = Client::latest()->get();
    $dataServices = Service::take(6)->latest()->get();
    $dataCatNews = Categori_News::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();
    $dataCatProject = Categori_Project::latest()->get();
    $dataNews = News::with('category')->take(6)->latest()->get();
    $dataCatProduct = Categori_Products::latest()->get();
    $dataProject = Project::with('category')->latest()->get();
    $dataProduct = Product::with('category')->latest()->get();
    return view(
      'client/pages/homepage',
      [
        'dataTeam' => $dataTeam,
        'dataNews' => $dataNews,
        'dataHome' => $dataHome,
        'dataAbout' => $dataAbout,
        'dataClient' => $dataClient,
        'dataProject' => $dataProject,
        'dataCatNews' => $dataCatNews,
        'dataProduct' => $dataProduct,
        'dataServices' => $dataServices,
        'dataCatProject' => $dataCatProject,
        'dataCatProduct' => $dataCatProduct,
        'dataTestimonial' => $dataTestimonial,
      ]
    );
  }
  public function about()
  {
    $dataTeam = Team::all();
    $dataAbout = About::first();
    $dataHome = Home::latest()->get();
    $dataServices = Service::latest()->get();
    $dataCatNews = Categori_News::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();
    $dataCatProject = Categori_Project::latest()->get();
    $dataNews = News::with('category')->latest()->get();
    $dataCatProduct = Categori_Products::latest()->get();
    $dataProject = Project::with('category')->latest()->get();
    $dataProduct = Product::with('category')->latest()->get();

    return view(
      'client/pages/aboutpage',
      [
        'dataTeam' => $dataTeam,
        'dataNews' => $dataNews,
        'dataHome' => $dataHome,
        'dataAbout' => $dataAbout,
        'dataProject' => $dataProject,
        'dataCatNews' => $dataCatNews,
        'dataProduct' => $dataProduct,
        'dataServices' => $dataServices,
        'dataCatProject' => $dataCatProject,
        'dataCatProduct' => $dataCatProduct,
        'dataTestimonial' => $dataTestimonial,
      ]
    );
  }
  public function services()
  {
    $dataTeam = Team::all();
    $dataAbout = About::first();
    $dataHome = Home::latest()->get();
    $dataServices = Service::latest()->get();
    $dataCatNews = Categori_News::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();
    $dataCatProject = Categori_Project::latest()->get();
    $dataNews = News::with('category')->latest()->get();
    $dataCatProduct = Categori_Products::latest()->get();
    $dataProject = Project::with('category')->latest()->get();
    $dataProduct = Product::with('category')->latest()->get();
    return view(
      'client/pages/servicespage',
      [
        'dataTeam' => $dataTeam,
        'dataNews' => $dataNews,
        'dataHome' => $dataHome,
        'dataAbout' => $dataAbout,
        'dataProject' => $dataProject,
        'dataCatNews' => $dataCatNews,
        'dataProduct' => $dataProduct,
        'dataServices' => $dataServices,
        'dataCatProject' => $dataCatProject,
        'dataCatProduct' => $dataCatProduct,
        'dataTestimonial' => $dataTestimonial,
      ]
    );
  }
  public function product()
  {
    $dataTeam = Team::all();
    $dataAbout = About::first();
    $dataHome = Home::latest()->get();
    $dataServices = Service::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();
    $dataProject = Project::with('category')->latest()->get();
    $dataCatProject = Categori_Project::latest()->get();
    $dataProduct = Product::with('category')->latest()->get();
    $dataCatProduct = Categori_Products::latest()->get();
    $dataNews = News::with('category')->latest()->get();
    $dataCatNews = Categori_News::latest()->get();
    return view(

      'client/pages/productpage',
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
  public function project()
  {
    $dataTeam = Team::all();
    $dataAbout = About::first();
    $dataHome = Home::latest()->get();
    $dataServices = Service::latest()->get();
    $dataCatNews = Categori_News::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();
    $dataCatProject = Categori_Project::latest()->get();
    $dataNews = News::with('category')->latest()->get();
    $dataCatProduct = Categori_Products::latest()->get();
    $dataProject = Project::with('category')->latest()->get();
    $dataProduct = Product::with('category')->latest()->get();
    return view(
      'client/pages/projectpage',
      [
        'dataTeam' => $dataTeam,
        'dataNews' => $dataNews,
        'dataHome' => $dataHome,
        'dataAbout' => $dataAbout,
        'dataProject' => $dataProject,
        'dataCatNews' => $dataCatNews,
        'dataProduct' => $dataProduct,
        'dataServices' => $dataServices,
        'dataCatProject' => $dataCatProject,
        'dataCatProduct' => $dataCatProduct,
        'dataTestimonial' => $dataTestimonial,
      ]
    );
  }
  public function contact()
  {
    $dataTeam = Team::all();
    $dataAbout = About::first();
    $dataHome = Home::latest()->get();
    $dataServices = Service::latest()->get();
    $dataCatNews = Categori_News::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();
    $dataCatProject = Categori_Project::latest()->get();
    $dataNews = News::with('category')->latest()->get();
    $dataCatProduct = Categori_Products::latest()->get();
    $dataProject = Project::with('category')->latest()->get();
    $dataProduct = Product::with('category')->latest()->get();
    return view(
      'client/pages/contactpage',
      [
        'dataTeam' => $dataTeam,
        'dataNews' => $dataNews,
        'dataHome' => $dataHome,
        'dataAbout' => $dataAbout,
        'dataProject' => $dataProject,
        'dataCatNews' => $dataCatNews,
        'dataProduct' => $dataProduct,
        'dataServices' => $dataServices,
        'dataCatProject' => $dataCatProject,
        'dataCatProduct' => $dataCatProduct,
        'dataTestimonial' => $dataTestimonial,
      ]
    );
  }
  public function news()
  {
    $dataTeam = Team::all();
    $dataAbout = About::first();
    $dataHome = Home::latest()->get();
    $dataServices = Service::latest()->get();
    $dataCatNews = Categori_News::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();
    $dataCatProject = Categori_Project::latest()->get();
    $dataNews = News::with('category')->latest()->get();
    $dataCatProduct = Categori_Products::latest()->get();
    $dataProject = Project::with('category')->latest()->get();
    $dataProduct = Product::with('category')->latest()->get();
    return view(
      'client/pages/newspage',
      [
        'dataTeam' => $dataTeam,
        'dataNews' => $dataNews,
        'dataHome' => $dataHome,
        'dataAbout' => $dataAbout,
        'dataProject' => $dataProject,
        'dataCatNews' => $dataCatNews,
        'dataProduct' => $dataProduct,
        'dataServices' => $dataServices,
        'dataCatProject' => $dataCatProject,
        'dataCatProduct' => $dataCatProduct,
        'dataTestimonial' => $dataTestimonial,
      ]
    );
  }

  public function newsByCategory($id)
  {
    $dataTeam = Team::all();
    $dataAbout = About::first();
    $dataHome = Home::latest()->get();
    $dataServices = Service::latest()->get();
    $dataCatNews = Categori_News::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();
    $dataCatProject = Categori_Project::latest()->get();
    $dataNews = News::with('category')->latest()->get();
    $dataCatProduct = Categori_Products::latest()->get();
    $dataProject = Project::with('category')->latest()->get();
    $dataProduct = Product::with('category')->latest()->get();

    $dataNewsByCategory = News::where('categori_id', $id)->latest()->get();
    $dataCatNewsById = Categori_News::findorfail($id);
    return view(
      'client/pages/detailcatnewspage',
      [
        'dataTeam' => $dataTeam,
        'dataNews' => $dataNews,
        'dataHome' => $dataHome,
        'dataAbout' => $dataAbout,
        'dataProject' => $dataProject,
        'dataCatNews' => $dataCatNews,
        'dataProduct' => $dataProduct,
        'dataServices' => $dataServices,
        'dataCatProject' => $dataCatProject,
        'dataCatProduct' => $dataCatProduct,
        'dataTestimonial' => $dataTestimonial,

        'dataNewsByCategory' => $dataNewsByCategory,
        'dataCatNewsById' => $dataCatNewsById,
      ]
    );
  }
  public function productByCategory($id)
  {
    // Validasi kategori produk
    $dataCatProductById = Categori_Products::findOrFail($id);
    $dataProductByCategory = Product::where('categori_id', $id)->latest()->get();

    // Data umum (bisa dirapikan lebih lanjut nanti)
    $dataTeam = Team::all();
    $dataAbout = About::first();
    $dataHome = Home::latest()->get();
    $dataServices = Service::latest()->get();
    $dataCatNews = Categori_News::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();
    $dataCatProject = Categori_Project::latest()->get();
    $dataNews = News::with('category')->latest()->get();
    $dataCatProduct = Categori_Products::latest()->get();
    $dataProject = Project::with('category')->latest()->get();
    $dataProduct = Product::with('category')->latest()->get();

    return view('client.pages.detailcatproductpage', [
      'dataTeam' => $dataTeam,
      'dataNews' => $dataNews,
      'dataHome' => $dataHome,
      'dataAbout' => $dataAbout,
      'dataProject' => $dataProject,
      'dataCatNews' => $dataCatNews,
      'dataProduct' => $dataProduct,
      'dataServices' => $dataServices,
      'dataCatProject' => $dataCatProject,
      'dataCatProduct' => $dataCatProduct,
      'dataTestimonial' => $dataTestimonial,

      // Kategori yang dipilih
      'dataProductByCategory' => $dataProductByCategory,
      'dataCatProductById' => $dataCatProductById,
    ]);
  }


  public function productDetail($id)
  {
    $dataTeam = Team::all();
    $dataAbout = About::first();
    $dataHome = Home::latest()->get();
    $dataServices = Service::latest()->get();
    $dataCatNews = Categori_News::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();
    $dataCatProject = Categori_Project::latest()->get();
    $dataNews = News::with('category')->latest()->get();
    $dataCatProduct = Categori_Products::latest()->get();
    $dataProject = Project::with('category')->latest()->get();
    $dataProduct = Product::with('category')->latest()->get();

    $dataDetailProduct = Product::findOrFail($id);
    return view(

      'client/pages/detailproductpage',
      [
        'dataTeam' => $dataTeam,
        'dataNews' => $dataNews,
        'dataHome' => $dataHome,
        'dataAbout' => $dataAbout,
        'dataProject' => $dataProject,
        'dataCatNews' => $dataCatNews,
        'dataProduct' => $dataProduct,
        'dataServices' => $dataServices,
        'dataCatProject' => $dataCatProject,
        'dataCatProduct' => $dataCatProduct,
        'dataTestimonial' => $dataTestimonial,

        'dataDetailProduct' => $dataDetailProduct,
      ]
    );
  }

  public function servicesDetail($id)
  {
    $dataTeam = Team::all();
    $dataAbout = About::first();
    $dataHome = Home::latest()->get();
    $dataServices = Service::latest()->get();
    $dataCatNews = Categori_News::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();
    $dataCatProject = Categori_Project::latest()->get();
    $dataNews = News::with('category')->latest()->get();
    $dataCatProduct = Categori_Products::latest()->get();
    $dataProject = Project::with('category')->latest()->get();
    $dataProduct = Product::with('category')->latest()->get();

    $dataDetailService = Service::findOrFail($id);
    return view(

      'client/pages/detailservicespage',
      [
        'dataTeam' => $dataTeam,
        'dataNews' => $dataNews,
        'dataHome' => $dataHome,
        'dataAbout' => $dataAbout,
        'dataProject' => $dataProject,
        'dataCatNews' => $dataCatNews,
        'dataProduct' => $dataProduct,
        'dataServices' => $dataServices,
        'dataCatProject' => $dataCatProject,
        'dataCatProduct' => $dataCatProduct,
        'dataTestimonial' => $dataTestimonial,

        'dataDetailService' => $dataDetailService,
      ]
    );
  }
  public function newsDetail($id)
  {
    $dataTeam = Team::all();
    $dataAbout = About::first();
    $dataHome = Home::latest()->get();
    $dataServices = Service::latest()->get();
    $dataCatNews = Categori_News::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();
    $dataCatProject = Categori_Project::latest()->get();
    $dataNews = News::with('category')->latest()->get();
    $dataCatProduct = Categori_Products::latest()->get();
    $dataProject = Project::with('category')->latest()->get();
    $dataProduct = Product::with('category')->latest()->get();

    $dataDetailNews = News::findOrFail($id);
    return view(

      'client/pages/detailnewspage',
      [
        'dataTeam' => $dataTeam,
        'dataNews' => $dataNews,
        'dataHome' => $dataHome,
        'dataAbout' => $dataAbout,
        'dataProject' => $dataProject,
        'dataCatNews' => $dataCatNews,
        'dataProduct' => $dataProduct,
        'dataServices' => $dataServices,
        'dataCatProject' => $dataCatProject,
        'dataCatProduct' => $dataCatProduct,
        'dataTestimonial' => $dataTestimonial,

        'dataDetailNews' => $dataDetailNews,
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
