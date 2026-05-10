<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicePageController;

Route::get('/', fn() => view('welcome'));
Route::get('/about-us', fn() => view('pages.about'));
Route::get('/services', fn() => view('pages.services'));
Route::get('/our-works', fn() => view('pages.works'));
Route::get('/faq', fn() => view('pages.faq'));
Route::get('/contact', fn() => view('pages.contact'));
Route::get('/get-a-quote', fn() => view('pages.quote'));
Route::get('/blog', fn() => view('pages.blog'));

// Category overview pages
Route::get('/{category}', function (string $category) {
    $data = ServicePageController::getData($category, '');
    if (!$data) abort(404);
    return view('pages.service-detail', $data);
})->where('category', 'seo|web-design|web-development|digital-marketing|software|apps');

// Sub-pages
Route::get('/{category}/{slug}', function (string $category, string $slug) {
    $data = ServicePageController::getData($category, $slug);
    if (!$data) abort(404);
    return view('pages.service-detail', $data);
})->where('category', 'seo|web-design|web-development|digital-marketing|software|apps');
