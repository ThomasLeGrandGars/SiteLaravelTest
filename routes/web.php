<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;
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

Route::get('/', "SiteController@accueil");
Route::get('/pagedeux', "SiteController@uneAutrePage");

Route::get('/envoi-fichier', "SiteController@envoiFichier");

Route::post('/envoi-fichier', "RequestController@sendEmail") -> name('contact.send');