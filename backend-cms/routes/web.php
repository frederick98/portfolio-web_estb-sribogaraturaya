<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BannerController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsInsightController;
use App\Http\Controllers\CompanyPictureController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\StoriesController;
use App\Http\Controllers\ArticleCategoryController;
use App\Http\Controllers\ArticleTopicController;
use App\Http\Controllers\InternalController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

##'CMS

##INTERNAL
Route::post('/upload-image', [InternalController::class, 'uploadImage'])->name('uploadImage');
Route::get('/delete-image/{id}', [InternalController::class, 'deleteImage'])->name('deleteImage');

#MyProfile
Route::get('/my-profile', [\App\Http\Controllers\MyProfileController::class, 'index']);

#Banner
Route::get('/banner', [\App\Http\Controllers\BannerController::class, 'index'])->name('banner.list');
Route::get('/banner/create', [\App\Http\Controllers\BannerController::class, 'create'])->name('banner.create');
Route::post('/banner/create', [\App\Http\Controllers\BannerController::class, 'post'])->name('banner.createP');
Route::get('/banner/edit/{id}', [\App\Http\Controllers\BannerController::class, 'edit'])->name('banner.edit');
Route::post('/banner/edit/{id}', [\App\Http\Controllers\BannerController::class, 'postEdit'])->name('banner.editP');
Route::delete('/banner/delete/{id}', [\App\Http\Controllers\BannerController::class, 'delete'])->name('banner.delete');

#About Us
Route::get('/about-us', [AboutController::class, 'index'])->name('about.index');
Route::post('/about-us', [AboutController::class, 'postIndex'])->name('about.indexP');
Route::get('/about-us/add-banner', [AboutController::class, 'createBanner'])->name('about.banner');
Route::post('/about-us/add-banner', [AboutController::class, 'postBanner'])->name('about.bannerP');
// Route::get('/about-us/edit-banner/{id}', [AboutController::class, 'editBanner'])->name('about.bannerEdit');
// Route::post('/about-us/edit-banner/{id}', [AboutController::class, 'editBannerP'])->name('about.bannerEditP');
Route::delete('/about-us/delete-banner/{id}', [AboutController::class, 'deleteBanner'])->name('about.bannerDelete');

#News & Insight
Route::get('/news-insight', [NewsInsightController::class, 'index'])->name('news.list');
Route::get('/news-insight/create', [NewsInsightController::class, 'create'])->name('news.create');
Route::post('/news-insight/create', [NewsInsightController::class, 'post'])->name('news.createP');
Route::get('/news-insight/edit/{id}', [NewsInsightController::class, 'edit'])->name('news.edit');
Route::post('/news-insight/edit/{id}', [NewsInsightController::class, 'postEdit'])->name('news.editP');
Route::delete('/news-insight/delete/{id}', [NewsInsightController::class, 'delete'])->name('news.delete');
Route::get('/news-insight/layout', [NewsInsightController::class, 'newslayout'])->name('news.layout');

#Article Category
Route::get('/news-insight/category', [ArticleCategoryController::class, 'index'])->name('category.list');
Route::get('/news-insight/category/create', [ArticleCategoryController::class, 'create'])->name('category.create');
Route::post('/news-insight/category/create', [ArticleCategoryController::class, 'post'])->name('category.createP');
Route::get('/news-insight/category/edit/{id}', [ArticleCategoryController::class, 'edit'])->name('category.edit');
Route::put('/news-insight/category/edit', [ArticleCategoryController::class, 'postEdit'])->name('category.editP');
Route::delete('/news-insight/category/delete/{id}', [ArticleCategoryController::class, 'delete'])->name('category.delete');

#Article Topic
Route::get('/news-insight/topic', [ArticleTopicController::class, 'index'])->name('topic.list');
Route::get('/news-insight/topic/create', [ArticleTopicController::class, 'create'])->name('topic.create');
Route::post('/news-insight/topic/create', [ArticleTopicController::class, 'post'])->name('topic.createP');
Route::get('/news-insight/topic/edit/{id}', [ArticleTopicController::class, 'edit'])->name('topic.edit');
Route::put('/news-insight/topic/edit', [ArticleTopicController::class, 'postEdit'])->name('topic.editP');
Route::delete('/news-insight/topic/delete/{id}', [ArticleTopicController::class, 'delete'])->name('topic.delete');

#Company Picture
Route::get('company-picture', [CompanyPictureController::class, 'index'])->name('companyPic.list');
Route::get('/company-picture/create', [CompanyPictureController::class, 'create'])->name('companyPic.create');
Route::post('/company-picture/create', [CompanyPictureController::class, 'post'])->name('companyPic.createP');
Route::get('/company-picture/edit/{id}', [CompanyPictureController::class, 'edit'])->name('companyPic.edit');
Route::post('/company-picture/edit/{id}', [CompanyPictureController::class, 'postEdit'])->name('companyPic.editP');
Route::delete('/company-picture/delete/{id}', [CompanyPictureController::class, 'delete'])->name('companyPic.delete');

#Our Business
Route::get('business', [BusinessController::class, 'index'])->name('business.list');
Route::get('/business/create', [BusinessController::class, 'create'])->name('business.create');
Route::post('/business/create', [BusinessController::class, 'post'])->name('business.createP');
Route::get('/business/edit/{id}', [BusinessController::class, 'edit'])->name('business.edit');
Route::post('/business/edit/{id}', [BusinessController::class, 'postEdit'])->name('business.editP');
Route::delete('/business/delete/{id}', [BusinessController::class, 'delete'])->name('business.delete');

#Our Stories
Route::get('stories', [StoriesController::class, 'index'])->name('stories.list');
Route::get('/stories/create', [StoriesController::class, 'create'])->name('stories.create');
Route::post('/stories/create', [StoriesController::class, 'post'])->name('stories.createP');
Route::get('/stories/edit/{id}', [StoriesController::class, 'edit'])->name('stories.edit');
Route::post('/stories/edit/{id}', [StoriesController::class, 'postEdit'])->name('stories.editP');
Route::delete('/stories/delete/{id}', [StoriesController::class, 'delete'])->name('stories.delete');

#Achievements
Route::get('achievement', [AchievementController::class, 'index'])->name('achievement.list');
Route::get('/achievement/create', [AchievementController::class, 'create'])->name('achievement.create');
Route::post('/achievement/create', [AchievementController::class, 'post'])->name('achievement.createP');
Route::get('/achievement/edit/{id}', [AchievementController::class, 'edit'])->name('achievement.edit');
Route::post('/achievement/edit/{id}', [AchievementController::class, 'postEdit'])->name('achievement.editP');
Route::delete('/achievement/delete/{id}', [AchievementController::class, 'delete'])->name('achievement.delete');

#Contact Us
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.list');
Route::get('/contact-us/export', [ContactController::class, 'exportExcel'])->name('contact.excel');
Route::get('/contact-us/page-layout', [ContactController::class, 'pageLayout'])->name('contact.layout');
Route::post('/contact-us/page-layout', [ContactController::class, 'pageLayoutP'])->name('contact.layoutP');

##Services Used

#Laravel File Manager
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Auth::routes();