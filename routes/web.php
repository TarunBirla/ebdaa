<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Ebdaa Islamic Finance Consultancy (Ebdaa IFC)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/our-firm', function () {
    return view('our-firm');
})->name('our-firm');

Route::get('/proficiencies', function () {
    return view('proficiencies');
})->name('proficiencies');

Route::get('/proficiencies/{slug}', function ($slug) {
    return view('proficiency-detail', ['slug' => $slug]);
})->name('proficiencies.detail');

Route::get('/industries', function () {
    return view('industries');
})->name('industries');

Route::get('/industries/{slug}', function ($slug) {
    return view('industry-detail', ['slug' => $slug]);
})->name('industries.detail');

Route::get('/technology', function () {
    return view('technology');
})->name('technology');

Route::get('/insights', function () {
    return view('insights');
})->name('insights');

Route::get('/insights/{slug}', function ($slug) {
    return view('insight-detail', ['slug' => $slug]);
})->name('insights.detail');

Route::get('/client-portal', function () {
    return view('client-portal');
})->name('client-portal');

Route::get('/speak-with-us', function () {
    return view('speak-with-us');
})->name('speak-with-us');
