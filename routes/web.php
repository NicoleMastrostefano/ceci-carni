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
    return view('welcome');
})->name("welcome");

Route::post('/ordinaonline',[App\Http\Controllers\OrderController::class, 'store'])->name('store');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//rotte protette da autenticazione
Route::prefix('admin') //prefisso rotte
  ->namespace('App\\Http\\Controllers\\Admin') //namespace (sottocartelle controller)
  ->middleware('auth') // filtro per autenticazione
  ->name('admin.')
  ->group(function() {
    // Route::get('/','HomeController@index');
    
    Route::get('/orders/storico','OrderController@storico')->name('storico');
    Route::resource('orders','OrderController');
    Route::get('/orders/{id}/archive','OrderController@archive')->name('archivia');
  

});




Route::get('/chisiamo', function () {
    return view("chisiamo");
  })->name("chisiamo");

Route::get('/ordinaonline', function () {
  return view("ordinaonline");
})->name("ordinaonline");

Route::get('/contatti', function () {
  return view("contatti");
})->name("contatti");

Route::get('/success', function () {
  return view("success");
})->name("success");