<?php

use App\Http\Controllers\Client\AppController;
use App\Http\Controllers\Client\AuthController;
use App\Http\Controllers\Server\AboutController;
use App\Http\Controllers\Server\CategoriNewsController;
use App\Http\Controllers\Server\CategoriProductsController;
use App\Http\Controllers\Server\CategoriProjectController;
use App\Http\Controllers\Server\ContactController;
use App\Http\Controllers\Server\DashboardController;
use App\Http\Controllers\Server\HomeController;
use App\Http\Controllers\Server\NewsController;
use App\Http\Controllers\Server\ProductController;
use App\Http\Controllers\Server\ProjectController;
use App\Http\Controllers\Server\QuoteController;
use App\Http\Controllers\Server\ServiceController;
use App\Http\Controllers\Server\TeamController;
use App\Http\Controllers\Server\TestimonialController;
use Illuminate\Support\Facades\Route;


// client
Route::get('/', [AppController::class, 'home'])->name('homepage');
Route::get('/about', [AppController::class, 'about'])->name('aboutpage');
Route::get('/services', [AppController::class, 'services'])->name('servicespage');
Route::get('/project', [AppController::class, 'project'])->name('projectpage');
Route::get('/product', [AppController::class, 'product'])->name('productpage');
Route::get('/contact', [AppController::class, 'contact'])->name('contactpage');

Route::post('/quotation', [AppController::class, 'storeQuotation'])->name('store.quotation');
Route::post('/contact', [AppController::class, 'storeContact'])->name('store.contact');


// auth
Route::get('/login', [AuthController::class, 'login']);


// server
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/admin/home', [HomeController::class, 'index'])->name('index.home');
Route::get('/admin/home/create', [HomeController::class, 'create'])->name('create.home');
Route::get('/admin/home/{id}/edit', [HomeController::class, 'edit'])->name('edit.home');
Route::post('/admin/home/store', [HomeController::class, 'store'])->name('store.home');
Route::delete('/admin/home/{id}', [HomeController::class, 'destroy'])->name('delete.home');

Route::get('/admin/about/edit', [AboutController::class, 'edit'])->name('edit.about');
Route::post('/admin/about/store', [AboutController::class, 'store'])->name('store.about');

Route::get('/admin/team', [TeamController::class, 'index'])->name('index.team');
Route::get('/admin/team/create', [TeamController::class, 'create'])->name('create.team');
Route::get('/admin/team/{id}/edit', [TeamController::class, 'edit'])->name('edit.team');
Route::post('/admin/team/store', [TeamController::class, 'store'])->name('store.team');
Route::delete('/admin/team/{id}', [TeamController::class, 'destroy'])->name('delete.team');

Route::get('/admin/testimonial', [TestimonialController::class, 'index'])->name('index.testimonial');
Route::get('/admin/testimonial/create', [TestimonialController::class, 'create'])->name('create.testimonial');
Route::get('/admin/testimonial/{id}/edit', [TestimonialController::class, 'edit'])->name('edit.testimonial');
Route::get('/admin/testimonial/{id}/show', [TestimonialController::class, 'show'])->name('show.testimonial');
Route::post('/admin/testimonial/store', [TestimonialController::class, 'store'])->name('store.testimonial');
Route::delete('/admin/testimonial/{id}', [TestimonialController::class, 'destroy'])->name('delete.testimonial');

Route::get('/admin/services', [ServiceController::class, 'index'])->name('index.services');
Route::get('/admin/services/create', [ServiceController::class, 'create'])->name('create.services');
Route::get('/admin/services/{id}/edit', [ServiceController::class, 'edit'])->name('edit.services');
Route::post('/admin/services/store', [ServiceController::class, 'store'])->name('store.services');
Route::delete('/admin/services/{id}', [ServiceController::class, 'destroy'])->name('delete.services');

Route::get('/admin/quote', [QuoteController::class, 'index'])->name('index.quote');
Route::get('/admin/quote/{id}/show', [QuoteController::class, 'show'])->name('show.quote');
Route::delete('/admin/quote/{id}', [QuoteController::class, 'destroy'])->name('delete.quote');
Route::get('/admin/contact', [ContactController::class, 'index'])->name('index.contact');
Route::get('/admin/contact/{id}/show', [ContactController::class, 'show'])->name('show.contact');
Route::delete('/admin/contact/{id}', [ContactController::class, 'destroy'])->name('delete.contact');

Route::get('/admin/categori-news', [CategoriNewsController::class, 'index'])->name('index.categoriNews');
Route::get('/admin/categori-news/create', [CategoriNewsController::class, 'create'])->name('create.categoriNews');
Route::get('/admin/categori-news/{id}/edit', [CategoriNewsController::class, 'edit'])->name('edit.categoriNews');
Route::post('/admin/categori-news/store', [CategoriNewsController::class, 'store'])->name('store.categoriNews');
Route::delete('/admin/categori-news/{id}', [CategoriNewsController::class, 'destroy'])->name('delete.categoriNews');

Route::get('/admin/categori-project', [CategoriProjectController::class, 'index'])->name('index.categoriProject');
Route::get('/admin/categori-project/create', [CategoriProjectController::class, 'create'])->name('create.categoriProject');
Route::get('/admin/categori-project/{id}/edit', [CategoriProjectController::class, 'edit'])->name('edit.categoriProject');
Route::post('/admin/categori-project/store', [CategoriProjectController::class, 'store'])->name('store.categoriProject');
Route::delete('/admin/categori-project/{id}', [CategoriProjectController::class, 'destroy'])->name('delete.categoriProject');

Route::get('/admin/categori-product', [CategoriProductsController::class, 'index'])->name('index.categoriProduct');
Route::get('/admin/categori-product/create', [CategoriProductsController::class, 'create'])->name('create.categoriProduct');
Route::get('/admin/categori-product/{id}/edit', [CategoriProductsController::class, 'edit'])->name('edit.categoriProduct');
Route::post('/admin/categori-product/store', [CategoriProductsController::class, 'store'])->name('store.categoriProduct');
Route::delete('/admin/categori-product/{id}', [CategoriProductsController::class, 'destroy'])->name('delete.categoriProduct');

Route::get('/admin/project', [ProjectController::class, 'index'])->name('index.project');
Route::get('/admin/project/create', [ProjectController::class, 'create'])->name('create.project');
Route::get('/admin/project/{id}/edit', [ProjectController::class, 'edit'])->name('edit.project');
Route::get('/admin/project/{id}/show', [ProjectController::class, 'show'])->name('show.project');
Route::post('/admin/project/store', [ProjectController::class, 'store'])->name('store.project');
Route::delete('/admin/project/{id}', [ProjectController::class, 'destroy'])->name('delete.project');

Route::get('/admin/product', [ProductController::class, 'index'])->name('index.product');
Route::get('/admin/product/create', [ProductController::class, 'create'])->name('create.product');
Route::get('/admin/product/{id}/edit', [ProductController::class, 'edit'])->name('edit.product');
Route::get('/admin/product/{id}/show', [ProductController::class, 'show'])->name('show.product');
Route::post('/admin/product/store', [ProductController::class, 'store'])->name('store.product');
Route::delete('/admin/product/{id}', [ProductController::class, 'destroy'])->name('delete.product');

Route::get('/admin/news', [NewsController::class, 'index'])->name('index.news');
Route::get('/admin/news/create', [NewsController::class, 'create'])->name('create.news');
Route::get('/admin/news/{id}/edit', [NewsController::class, 'edit'])->name('edit.news');
Route::get('/admin/news/{id}/show', [NewsController::class, 'show'])->name('show.news');
Route::post('/admin/news/store', [NewsController::class, 'store'])->name('store.news');
Route::delete('/admin/news/{id}', [NewsController::class, 'destroy'])->name('delete.news');
