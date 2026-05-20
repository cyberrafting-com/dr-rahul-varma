<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

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

Route::get('/clear', function () {
    //\Artisan::call('key:generate');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/diabetes-foot', function () {
    return view('services.diabaties-foot-care');
})->name('diabetes.foot');

Route::get('/hypertension-heart', function () {
    return view('services.hypertension-heart-care');
})->name('hypertension.heart');

Route::get('/fever-infections', function () {
    return view('services.fever-infections-general');
})->name('fever.infections');

Route::get('/stroke', function () {
    return view('services.stroke-paralysis');
})->name('stroke');

Route::get('/kidney-disease', function () {
    return view('services.kidney-disease-care');
})->name('kidney.disease');

Route::get('/asthma-copd', function () {
    return view('services.asthma-copd-care');
})->name('asthma.copd');

Route::get('/critical-illness', function () {
    return view('services.critical-care');
})->name('critical.illness');

Route::get('/preventive-health', function () {
    return view('services.preventive-health-care');
})->name('preventive.health');

Route::get('/wellness-lifestyle-management', function () {
    return view('services.wellness-lifestyle-management');
})->name('wellness.lifestyle.management');

Route::get('/thyroid', function () {
    return view('services.thyroid');
})->name('thyroid');

Route::get('/hypertension', function () {
    return view('services.hypertension');
})->name('blood.pressure');

Route::get('/pcos', function () {
    return view('services.pcos-care');
})->name('pcos');

Route::get('/diabetes', function () {
    return view('services.diabetes');
})->name('diabetes');

Route::get('/cardiac-disorder', function () {
    return view('services.cardiac-disorder');
})->name('cardiac.disorder');

Route::get('/lung-disorder', function () {
    return view('services.lung-disorder');
})->name('lung.disorder');

Route::get('/post-covid-complex', function () {
    return view('services.post-covid-complex-care');
})->name('post.covid.complex');

Route::get('/educational-videos', function () {
    return view('educational-videos');
})->name('educational.videos');

Route::get('/testimonials', function () {
    return view('testimonials');
})->name('testimonials');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/media', function () {
    return view('media');
})->name('media');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');
