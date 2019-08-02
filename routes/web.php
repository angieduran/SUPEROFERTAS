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
Route::get('/calculadora',function() {
    return 'soy una calculadora';
});
Route::get('/formulario.blade.php', function () {
    return view('formulario');

});
Route::get('/index.blade.php', function () {
    return view('index');

});
Route::get('/welcome.blade.php',function() {
    return view('welcome') ;
});
Route::get('/login.blade.php',function() {
    return view('login') ;
});
Route::get('/contact.blade.php',function() {
    return view('contact') ;
});
Route::get('/generic.blade.php',function() {
    return view('generic') ;
});
Route::get('/elements.blade.php',function() {
    return view('elements') ;
});
Route::get('/complete.blade.php',function() {
    return view('complete') ;
});
Route::get('/vista.blade.php',function() {
    return view('vista') ;
});
Route::get('/app.blade.php',function() {
    return view('app') ;
});
Route::get('/vista2.blade.php',function() {
    return view('vista2') ;
});

Route::Resource("ooperaciones","operaciones");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
