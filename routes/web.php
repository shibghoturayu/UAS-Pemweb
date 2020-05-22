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
//Route Login
Route::get('/', function () {
    return view('home1');
});

Auth::routes();
Route::get('/eo', 'EoController@index')->name('eo')->middleware('eo');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/peserta', 'PesertaController@index')->name('peserta')->middleware('peserta');

// Route::get('/home', 'AcademicController@index')->name('home');


Route::get('/dataadmin', function () {
    return view('dataadmin');

});

Route::get('/adminevent', function () {
    return view('adminevent');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/dataiklan', function () {
    return view('dataiklan');
});

Route::get('/datatransaksi', function () {
    return view('datatransaksi');
});

Route::get('/tambahiklan', function () {
    return view('tambahiklan');
});


Route::get('/laporan', function () {
    return view('laporan');
});

*/
Route::get('/index', function () {
    return view('index');
});

Route::get('/seminar', function () {
    return view('seminar');
});

Route::get('/festival', function () {
    return view('festival');
});

Route::get('/kompetisi', function () {
    return view('kompetisi');
});

Route::get('/others', function () {
    return view('others');
});

Route::get('/event', function () {
    return view('event');
});







