<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryControler;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\SplashPopUpController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\packagesController;
use App\Http\Controllers\Admin\SubcriberController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\JobsController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;


Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');

Route::group(['as' => 'admin.', 'middleware' => ['auth', 'admin']], function () {

  //    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


  Route::resource('/permissions', permissionController::class);
  Route::post('/permissions/getdata', [permissionController::class, 'getdata'])->name('permissions.getdata');


  Route::resource('/users', UserController::class);
  Route::post('/users/getdata', [UserController::class, 'getdata'])->name('users.getdata');
  Route::get('/user/status/active/{id}', [UserController::class, 'user_active'])->name('user.status.active');
  Route::get('/user/status/deactive/{id}', [UserController::class, 'user_deactive'])->name('user.status.deactive');
  Route::get('/file/downloads', [UserController::class, 'filedownload'])->name('filedownload');

  Route::resource('/roles', RolesController::class);
  Route::post('/roles/getdata', [RolesController::class, 'getdata'])->name('roles.getdata');

  Route::resource('/jobs', JobsController::class);
  Route::post('/jobs/getdata', [JobsController::class, 'getdata'])->name('jobs.getdata');
  Route::get('/jobs_applied', [JobsController::class, 'applied_view'])->name('jobs.applied');
  Route::post('/jobs_applied/getdata', [JobsController::class, 'applied'])->name('jobs.applied.getdata');
  Route::get('/jobs_applied/show/{id}', [JobsController::class, 'applied_show'])->name('jobs.applied.show');


  Route::resource('/country', CountryController::class);
  Route::post('/country/getdata', [CountryController::class, 'getdata'])->name('country.getdata');


  Route::resource('/city', CityController::class);
  Route::post('/city/getdata', [CityController::class, 'getdata'])->name('city.getdata');

  Route::resource('/pages', PagesController::class);
  Route::post('/pages/getdata', [PagesController::class, 'getdata'])->name('pages.getdata');


  Route::resource('/subscriber', SubcriberController::class);
  Route::post('/subscriber/getdata', [SubcriberController::class, 'getdata'])->name('subscriber.getdata');


  Route::resource('/blogs', BlogController::class);
  Route::post('/blog/getdata', [BlogController::class, 'getdata'])->name('blog.getdata');


  Route::resource('/services', ServiceController::class);
  Route::post('/services/getdata', [ServiceController::class, 'getdata'])->name('services.getdata');

  Route::resource('/packages', packagesController::class);
  Route::post('/packages/getdata', [packagesController::class, 'getdata'])->name('packages.getdata');

  Route::get('/page/edit/packages', [packagesController::class, 'packages_page'])->name('packages.page');
  Route::put('/page/packages/page/{id}', [packagesController::class, 'packages_page_save'])->name('package.update');



  Route::resource('/brands', BrandController::class);
  Route::post('/brands/getdata', [BrandController::class, 'getdata'])->name('brands.getdata');

  Route::resource('/gallery', GalleryController::class);
  Route::post('/gallery/getdata', [GalleryController::class, 'getdata'])->name('gallery.getdata');
  Route::resource('/gallery', GalleryController::class);
  Route::post('/gallery/getdata', [GalleryController::class, 'getdata'])->name('gallery.getdata');


  Route::resource('/files', \App\Http\Controllers\Admin\FileController::class);
  Route::post('/files/getdata', [\App\Http\Controllers\Admin\FileController::class, 'getdata'])->name('files.getdata');

  Route::resource('/media', MediaController::class);
  Route::post('/media/getdata', [MediaController::class, 'getdata'])->name('media.getdata');


  //   Route::resource('/setting', SettingController::class);
  Route::get('/setting/{id}', [SettingController::class, 'edit'])->name('setting.page');
  Route::put('/setting/update/{id}', [SettingController::class, 'update'])->name('setting.update');
  Route::get('/Booking-query', [SettingController::class, 'Booking_query'])->name('Booking.query');
  Route::get('/Conect-form', [SettingController::class, 'Conect_form'])->name('Conect.form');
  Route::get('/home/edit', [PagesController::class, 'homeedit'])->name('home.edit');
  Route::post('/home/edit', [PagesController::class, 'homeupdate'])->name('home.update');
  Route::get('/privacy/edit', [PagesController::class, 'privacy_edit'])->name('privacy.edit');
  Route::put('/privacy/edit/{id}', [PagesController::class, 'privacy_uodate'])->name('privacy.update');
  Route::get('/terms/edit', [PagesController::class, 'term_edit'])->name('term.edit');
  Route::post('/terms/edit', [PagesController::class, 'termupdate'])->name('term.update');
  Route::resource('splash-pop-ups', SplashPopUpController::class);
  route::resource("/categories", CategoryControler::class);
});
