<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ServicePageController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MessagesController;
use App\Http\Controllers\Admin\QuotesController;

// ── Public routes ──────────────────────────────────────────
Route::get('/',          fn() => view('welcome'));
Route::get('/about-us',  fn() => view('pages.about'));
Route::get('/services',  fn() => view('pages.services'));
Route::get('/our-works', fn() => view('pages.works'));
Route::get('/faq',       fn() => view('pages.faq'));
Route::get('/contact',   fn() => view('pages.contact'));
Route::get('/blog',      fn() => view('pages.blog'));

Route::post('/contact',  [ContactController::class, 'store']);

Route::get('/get-a-quote',  fn() => view('pages.quote'));
Route::post('/get-a-quote', [QuoteController::class, 'store']);

// ── Admin auth ─────────────────────────────────────────────
Route::get('/admin',         fn() => redirect('/admin/login'));
Route::get('/admin/login',   [AuthController::class, 'showLogin']);
Route::post('/admin/login',  [AuthController::class, 'login']);
Route::get('/admin/logout',  [AuthController::class, 'logout']);

// ── Admin panel (protected) ────────────────────────────────
Route::middleware(\App\Http\Middleware\AdminAuth::class)->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/messages',              [MessagesController::class, 'index']);
    Route::get('/messages/{message}',    [MessagesController::class, 'show']);
    Route::post('/messages/{message}/status', [MessagesController::class, 'updateStatus']);
    Route::delete('/messages/{message}', [MessagesController::class, 'destroy']);

    Route::get('/quotes',            [QuotesController::class, 'index']);
    Route::get('/quotes/{quote}',    [QuotesController::class, 'show']);
    Route::post('/quotes/{quote}/status', [QuotesController::class, 'updateStatus']);
    Route::delete('/quotes/{quote}', [QuotesController::class, 'destroy']);
});

// ── Service category / sub-pages ──────────────────────────
Route::get('/{category}', function (string $category) {
    $data = ServicePageController::getData($category, '');
    if (!$data) abort(404);
    return view('pages.service-detail', $data);
})->where('category', 'seo|web-design|web-development|digital-marketing|software|apps');

Route::get('/{category}/{slug}', function (string $category, string $slug) {
    $data = ServicePageController::getData($category, $slug);
    if (!$data) abort(404);
    return view('pages.service-detail', $data);
})->where('category', 'seo|web-design|web-development|digital-marketing|software|apps');
