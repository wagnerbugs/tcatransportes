<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'index')->name('site.index');
    Route::get('/sobre', 'sobre')->name('site.sobre');
    Route::get('/servicos', 'servicos')->name('site.servicos');
    Route::get('/contato', 'contato')->name('site.contato');
    Route::post('/contato', 'contatoForm')->name('site.contato');
});
