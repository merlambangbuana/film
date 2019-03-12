<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::get('extend', function() {
    return view('dashboard.index');
});

Route::get('sidebar', function() {
    return view('layouts.master');
});

Route::get('dashboard', function() {
    return view('dashboard.dashboard');
});

Route::get('kategori', function() {
    return "kategori film";
});

Route::get('detail_kategori/{id}', function($id) {
    return "Halaman Detail Kategori".$id;
});

Route::resource('kategori', 'KategoriController');


/*Route::resource('kategori', 'KategoriController')->except(['destroy','update']);
*/

Route::resource('kategori', 'KategoriController');


/*Route::resource('kategori', 'KategoriController')->except(['destroy','update']);
*/
?>



