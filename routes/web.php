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

Route::get('/', function () {
    $navbar = config('db.navbar');
    // $footer = config('db.footer');
    // $icons = config('db.icons');
    return view('home', compact('navbar'));
})->name('home');


Route::get('/comics', function () {
    $comics = config('db.comics');
    return view('comics.index', compact('comics'));
})->name('comics.index');
Route::get('/comics/{id}', function ($id) {
    $comics = config('db.comics');
    if ($id >= 0 && $id < count($comics)) {
        $comic = $comics[$id];
        return view('comics.show', compact('comic'));
    } else {
        abort(404);
    }
})->name('comics.show');