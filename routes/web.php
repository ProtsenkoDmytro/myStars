<?php

use App\stars;
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
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/addmenu', function () {
    return view('addmenu');
});


Route::get('/profile', function () {
    return view('profile');
});
Route::get('/catalog', function () {
    return view('catalog');
});
Route::post('/reg/clients','ClientsController@addClients')->name('/reg/clients');
Route::post('/aut/clients','ClientsController@loginClient')->name('/aut/clients');
Route::post('/reg/person','PersonalsController@regAdmin')->name('/reg/person');
Route::post('/aut/person','PersonalsController@loginAdmin')->name('/aut/person');
Route::post('/add/stars','StarsController@addStars')->name('/add/stars');
Route::post('/buy/stars','PurchasesController@buyStars')->name('/buy/stars');
Route::post('catalog','CatalogController@showStars')->name('catalog');
Route::get('/login', function () {
    return view('login');})->name('reg.person');
Route::get('/profile', function () {
    return view('profile');})->name('aut.profile');

Route::get('/addmenu', function () {
    return view('addmenu');})->name('reg.adm');
Route::get('/profile', function () {
    return view('profile');})->name('profile');
Route::get('/catalog', function () {
    return view('catalog');})->name('catalog');
Route::get('/catalog', function () {
    // Получаем данные звезд из базы данных
    $dataCatalog = stars::all()->where('star_status','=',1);

    // Передаем данные в представление
    return view('catalog', ['dataCatalog' => $dataCatalog]);
});
