<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


/**
 * Code by Thang Em
 */
Route::get('/', function () {
    return view('client-side.home');
})->name('client-side.home');

Route::get('/about', function () {
    return view('client-side.about');
})->name('client-side.about');

Route::get('/services', function () {
    return view('client-side.services');
})->name('client-side.services');

Route::get('/careers', function () {
    return view('client-side.careers');
})->name('client-side.careers');

Route::get('/contact', function () {
    return view('client-side.contact');
})->name('client-side.contact');

Route::get('/article-list', function () {
    return view('client-side.article_list');
})->name('client-side.article_list');

Route::get('/article-details', function () {
    return view('client-side.article_details');
})->name('client-side.article_details');


// admin-side routing
Route::prefix('admin')->group(function () {

    Route::get('/article/add', function () {
        return view('admin-side.article_add');
    })->name('admin.article.add')->middleware('auth');

    Route::get('/', function () {
        return view('admin-side.article_table');
    })->name('admin.article.table')->middleware('auth');

    Route::get('/article/details', function () {
        return view('admin-side.article_details');
    })->name('admin.article.details')->middleware('auth');

    Route::get('/edit', function () {
        return view('admin-side.article_edit');
    })->name('admin.article.edit')->middleware('auth');

    Route::get('/idea', function () {
        return view('admin-side.idea');
    })->name('admin.idea')->middleware('auth');

    Route::get('/resume', function () {
        return view('admin-side.resume');
    })->name('admin.resume')->middleware('auth');


});