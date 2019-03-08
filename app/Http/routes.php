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

Route::get('kategori', function() {
    return "kategori film";
});

Route::get('detail_kategori/{id}', function($id) {
    return "Halaman Detail Kategori".$id;
});
<<<<<<< HEAD
=======

Route::resource('kategori', 'KategoriController');


/*Route::resource('kategori', 'KategoriController')->except(['destroy','update']);
*/
?>
>>>>>>> ed782d6c37d180e578b1514d13b40d804546dbea

Route::resource('kategori', 'KategoriController');


/*Route::resource('kategori', 'KategoriController')->except(['destroy','update']);
*/
?>