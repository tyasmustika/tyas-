<?php

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
    return view('welcome');
});

Route::get('/welcome', function(){
	echo "welcome";
});

Route::get('/show/{id}', function ($id) {
	echo "Nilai Parameter adalah ".$id;
});

Route::get('/show/{id?}', function ($id=1) {
	echo "Nilai Parameter adalah " .$id;
});

Route::get('/edit/{nama}', function ($nama) {
	echo "Nilai Parameter adalah ".$nama;
})->where('nama','[A-Za-z]+');

Route::get('/index', function () {
	echo "<a href='".route('create')."'>Akses Route dengan nama </a>";	
});

Route::get('/create', function () {
	echo "route diakses menggunakan nama";
})->name('create');

Route::get('/barangs', 'barangsController@index');

Route::get('/barangs/show', 'barangsController@show');

Route::get('/halaman',function(){
$title = 'Harry Pooter';
$konten = 'harry potter and the deathly hallows: part 2';
return view('konten.halaman',compact('title','konten'));
});
