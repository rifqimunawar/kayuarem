<?php

namespace App\Http\Controllers\Client;

use App\Helpers\Fungsi;
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
use App\Models\Milestone;
use App\Models\Project;
use App\Models\Quote;
use App\Models\Testimonial;
use RealRashid\SweetAlert\Facades\Alert;

class AppController extends Controller
{
  public function home()
  {
    $halaman = "Home Page";
    Fungsi::logPengunjung($halaman);

    // Model dengan sorting 'sort' descending
    $dataTeam = Team::orderBy('sort', 'asc')->get();
    $dataHome = Home::orderBy('sort', 'asc')->get();
    $dataClient = Client::orderBy('sort', 'asc')->get();
    $dataServices = Service::take(6)->orderBy('sort', 'asc')->get();
    $dataProject = Project::with('category')->orderBy('sort', 'asc')->get();
    $dataProduct = Product::with('category')->orderBy('sort', 'asc')->get();

    // Model lain tetap pakai latest()
    $dataAbout = About::first();
    $dataCatNews = Categori_News::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();
    $dataCatProject = Categori_Project::latest()->get();
    $dataNews = News::with('category')->take(6)->latest()->get();
    $dataCatProduct = Categori_Products::latest()->get();

    return view('client/pages/homepage', [
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
    ]);
  }

  public function about()
  {
    $halaman = "About Page";
    Fungsi::logPengunjung($halaman);

    // Model dengan sorting 'sort' descending
    $dataTeam = Team::orderBy('sort', 'asc')->get();
    $dataHome = Home::orderBy('sort', 'asc')->get();
    $dataServices = Service::orderBy('sort', 'asc')->get();
    $dataProject = Project::with('category')->orderBy('sort', 'asc')->get();
    $dataProduct = Product::with('category')->orderBy('sort', 'asc')->get();

    // Model lain tetap seperti semula
    $dataAbout = About::first();
    $dataMilestone = Milestone::all();
    $dataCatNews = Categori_News::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();
    $dataCatProject = Categori_Project::latest()->get();
    $dataNews = News::with('category')->latest()->get();
    $dataCatProduct = Categori_Products::latest()->get();

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
        'dataMilestone' => $dataMilestone,
        'dataCatProject' => $dataCatProject,
        'dataCatProduct' => $dataCatProduct,
        'dataTestimonial' => $dataTestimonial,
      ]
    );
  }
  public function services()
  {
    $halaman = "Gallery page";
    Fungsi::logPengunjung($halaman);

    // Model dengan sorting 'sort' descending
    $dataTeam = Team::orderBy('sort', 'asc')->get();
    $dataHome = Home::orderBy('sort', 'asc')->get();
    $dataServices = Service::orderBy('sort', 'asc')->get();
    $dataProject = Project::with('category')->orderBy('sort', 'asc')->get();
    $dataProduct = Product::with('category')->orderBy('sort', 'asc')->get();

    // Model lain tetap seperti semula
    $dataAbout = About::first();
    $dataCatNews = Categori_News::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();
    $dataCatProject = Categori_Project::latest()->get();
    $dataNews = News::with('category')->latest()->get();
    $dataCatProduct = Categori_Products::latest()->get();

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
    $halaman = "Products page";
    Fungsi::logPengunjung($halaman);

    // Model dengan sorting 'sort' descending
    $dataTeam = Team::orderBy('sort', 'asc')->get();
    $dataHome = Home::orderBy('sort', 'asc')->get();
    $dataServices = Service::orderBy('sort', 'asc')->get();
    $dataProject = Project::with('category')->orderBy('sort', 'asc')->get();
    $dataProduct = Product::with('category')->orderBy('sort', 'asc')->get();

    // Model lain tetap seperti semula
    $dataAbout = About::first();
    $dataTestimonial = Testimonial::latest()->get();
    $dataCatProject = Categori_Project::latest()->get();
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
    $halaman = "Project page";
    Fungsi::logPengunjung($halaman);

    // Model dengan sorting 'sort' descending
    $dataTeam = Team::orderBy('sort', 'asc')->get();
    $dataHome = Home::orderBy('sort', 'asc')->get();
    $dataServices = Service::orderBy('sort', 'asc')->get();
    $dataProject = Project::with('category')->orderBy('sort', 'asc')->get();
    $dataProduct = Product::with('category')->orderBy('sort', 'asc')->get();

    // Model lain tetap seperti semula
    $dataAbout = About::first();
    $dataCatNews = Categori_News::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();
    $dataCatProject = Categori_Project::latest()->get();
    $dataNews = News::with('category')->latest()->get();
    $dataCatProduct = Categori_Products::latest()->get();

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
    $halaman = "Contact page";
    Fungsi::logPengunjung($halaman);

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
    $halaman = "Artikel page";
    Fungsi::logPengunjung($halaman);

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
    $halaman = "Artile by category page";
    Fungsi::logPengunjung($halaman);

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
    $halaman = "Product by Category page";
    Fungsi::logPengunjung($halaman);

    // Validasi kategori produk
    $dataCatProductById = Categori_Products::findOrFail($id);
    $dataProductByCategory = Product::where('categori_id', $id)->orderBy('sort', 'asc')->get();

    // Model dengan sorting 'sort' descending
    $dataTeam = Team::orderBy('sort', 'asc')->get();
    $dataHome = Home::orderBy('sort', 'asc')->get();
    $dataServices = Service::orderBy('sort', 'asc')->get();
    $dataProject = Project::with('category')->orderBy('sort', 'asc')->get();
    $dataProduct = Product::with('category')->orderBy('sort', 'asc')->get();

    // Model lain tetap seperti semula
    $dataAbout = About::first();
    $dataCatNews = Categori_News::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();
    $dataCatProject = Categori_Project::latest()->get();
    $dataNews = News::with('category')->latest()->get();
    $dataCatProduct = Categori_Products::latest()->get();

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

  public function projectByCategory($id)
  {
    $halaman = "Project by category page";
    Fungsi::logPengunjung($halaman);

    // Validasi kategori project
    $dataCatProjectById = Categori_Project::findOrFail($id);
    $dataProjectByCategory = Project::where('categori_id', $id)->orderBy('sort', 'asc')->get();

    // Model dengan sorting 'sort' descending
    $dataTeam = Team::orderBy('sort', 'asc')->get();
    $dataHome = Home::orderBy('sort', 'asc')->get();
    $dataServices = Service::orderBy('sort', 'asc')->get();
    $dataProject = Project::with('category')->orderBy('sort', 'asc')->get();
    $dataProduct = Product::with('category')->orderBy('sort', 'asc')->get();

    // Model lain tetap seperti semula
    $dataAbout = About::first();
    $dataCatNews = Categori_News::latest()->get();
    $dataTestimonial = Testimonial::latest()->get();
    $dataCatProject = Categori_Project::latest()->get();
    $dataNews = News::with('category')->latest()->get();
    $dataCatProduct = Categori_Products::latest()->get();

    return view('client.pages.detailcatprojectpage', [
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
      'dataProjectByCategory' => $dataProjectByCategory,
      'dataCatProjectById' => $dataCatProjectById,
    ]);
  }


  public function productDetail($id)
  {
    $halaman = "Detail produk page";
    Fungsi::logPengunjung($halaman);

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

  public function projectDetail($id)
  {
    $halaman = "Project detail page";
    Fungsi::logPengunjung($halaman);

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

    $dataDetailProject = Project::findOrFail($id);
    return view(

      'client/pages/detailprojectpage',
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

        'dataDetailProject' => $dataDetailProject,
      ]
    );
  }


  public function servicesDetail($id)
  {
    $halaman = "Gallery detail page";
    Fungsi::logPengunjung($halaman);

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

    $halaman = "Artikel detail page";
    Fungsi::logPengunjung($halaman);

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
    $halaman = "Mengirim pesan page";
    Fungsi::logPengunjung($halaman);

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
