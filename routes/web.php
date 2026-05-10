<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));
Route::get('/about-us', fn() => view('pages.about'));
Route::get('/services', fn() => view('pages.services'));
Route::get('/our-works', fn() => view('pages.works'));
Route::get('/faq', fn() => view('pages.faq'));
Route::get('/contact', fn() => view('pages.contact'));
Route::get('/get-a-quote', fn() => view('pages.quote'));
Route::get('/blog', fn() => view('pages.blog'));
