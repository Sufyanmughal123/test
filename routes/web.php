<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OutputController;
use Illuminate\Support\Facades\Route;
use App\Mail\ContectMail;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return view('test2');
});
Route::get('/mail', function () {


});


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';

Route::get('/careers', [OutputController::class, 'careers'])->name('careers');
Route::get('/infographics', [OutputController::class, 'infographics'])->name('infographics');
Route::get('/events-gallery', [OutputController::class, 'events_gallery'])->name('events-gallery');
Route::post('/careers/apply', [OutputController::class, 'careers_apply'])->name('careers.apply');
Route::get('/why-us', [OutputController::class, 'why_us'])->name('why.us');
Route::get('/all-services', [OutputController::class, 'services_all'])->name('services_all');
Route::get('/contact-us', [OutputController::class, 'contact_us'])->name('careers');
Route::get('/trust-center', [OutputController::class, 'trust_center'])->name('trust.center');
Route::post('/contact-us', [OutputController::class, 'contact_us_post'])->name('post.careers');
Route::get('/why-cyber', [OutputController::class, 'why_cyber'])->name('why.cyber');
Route::get('/{slug}', [OutputController::class, 'services'])->name('service.details');
Route::get('/blogs/all', [OutputController::class, 'blogs'])->name('blogs.all');
Route::get('/blogs/{slug}', [OutputController::class, 'blogs_details'])->name('blogs.details');
Route::post('/subcribe', [OutputController::class, 'subcribe'])->name('subcribe');
Route::post('/file_download', [OutputController::class, 'file_download'])->name('filedownlooad');
