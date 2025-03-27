<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RedirectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test',[HomepageController::class, 'test'])->name('test');

// Homepage
Route::get('/',[HomepageController::class, 'index'])->name('homepage');
Route::post('/',[HomepageController::class, 'mail'])->name('mailHomepage');
    
// About Us
Route::get('/about-us', [HomepageController::class, 'aboutUs'])->name('aboutUs');

// Contact Us
Route::get('/contact-us', [HomepageController::class, 'contactUs'])->name('contactUs');
Route::post('/contact-us', [HomepageController::class, 'mail'])->name('mailContactUs');

// News
Route::get('/news', [ArticleController::class, 'index'])->name('newsIndex');
Route::get('/news/{slug}',[ArticleController::class, 'details'])->name('newsDetail');
Route::get('/news/result/{search}',[ArticleController::class, 'search'])->name('newsSearch');

// Companies
Route::get('/sarimelati-kencana', function () {return view('front.companies.companiesSMK');})->name('ourCompany-smk');
Route::get('/sriboga-marugame-indonesia', function () {return view('front.companies.companiesSMI');})->name('ourCompany-smi');
Route::get('/sriboga-flour-mill', function () {return view('front.companies.companiesSFM');})->name('ourCompany-sfm');
Route::get('/mulia-inti-pangan', function () {return view('front.companies.companiesMIP');})->name('ourCompany-mip');

// Investors
Route::get('/investors-relations', [HomepageController::class, 'investor'])->name('investor');
Route::post('/investors-relations', [HomepageController::class, 'mail'])->name('mailInvestor');

// 404 Redirect
Route::fallback([HomepageController::class, 'error404'])->name('404');

// Old Routes Redirect
Route::get('/sriboga-marugame-udon', [RedirectController::class, 'marugame']);
Route::get('/all-news', [RedirectController::class, 'news']);
Route::get('/sriboga-news', [RedirectController::class, 'news']);
Route::get('/industry-insights', [RedirectController::class, 'news']);
Route::get('/in-the-media', [RedirectController::class, 'news']);
Route::get('/post/{slug}', [RedirectController::class, 'post']);
Route::get('/business-model', [RedirectController::class, 'aboutUs']);
Route::get('/brand-identity', [RedirectController::class, 'aboutUs']);
Route::get('/leadership-team', [RedirectController::class, 'aboutUs']);
Route::get('/our-people', [RedirectController::class, 'aboutUs']);
Route::get('/governance', [RedirectController::class, 'aboutUs']);

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');