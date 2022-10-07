<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\TestController;
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

Route::get('/test',     [TestController::class, 'index']);
Route::get('/scrapers', [TestController::class, 'Scrapers']);
Route::get('/divida',   [ClientController::class, 'GetDivisa']);

Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'  =>  '/client'], function() 
{
    Route::get('/dashboard',                [ClientController::class,   'index'])->name('/dashboard');
    Route::get('/invoices',                 [ClientController::class,   'index'])->name('/invoices');
    Route::get('/wallet',                   [ClientController::class,   'Wallet'])->name('/wallet');
    Route::get('/wallet/register',          [ClientController::class,   'WaRegister'])->name('/wallet/register');
    
    Route::get('/profile',                  [ClientController::class,   'ProIndex'])->name('/profile');
    Route::post('/profile/load',            [ClientController::class,   'ProLoad'])->name('/profile/load');
    Route::post('/profile/update',          [ClientController::class,   'ProUpdate'])->name('/profile/update');

});

Route::group(['prefix'  =>  '/creditcard'], function() 
{
    Route::post('/register',                [ClientController::class,   'RegisterTDC'])->name('/register'); 
    Route::get('/search',                   [ClientController::class,   'SearchTDC'])->name('/search'); 
    Route::post('/update',                  [ClientController::class,   'UpdateTDC'])->name('/update'); 
});

Route::group(['prefix'  =>  '/accountbank'], function() 
{
    Route::post('/register',                [ClientController::class,   'RegisterAB'])->name('/register'); 
    Route::get('/search',                   [ClientController::class,   'SearchAB'])->name('/search'); 
    Route::post('/update',                  [ClientController::class,   'UpdateAB'])->name('/update'); 
});

Route::group(['prefix'  =>  '/zelle'], function() 
{
    Route::post('/register',                [ClientController::class,   'RegisterZelle'])->name('/register'); 
    Route::post('/files',                   [ClientController::class,   'FilesZelle'])->name('/files'); 
    Route::post('/files/delete',            [ClientController::class,   'DeleteFiles'])->name('/files/delete'); 
});

Route::group(['prefix'  =>  '/transference'], function() 
{
    Route::post('/register',                [ClientController::class,   'RegisterTransference'])->name('/register'); 
    Route::post('/files',                   [ClientController::class,   'FilesTransference'])->name('/files'); 
    Route::post('/files/delete',            [ClientController::class,   'DeleteFilesBS'])->name('/files/delete'); 
    Route::post('/confirms',                [ClientController::class,   'ConfirmPayment'])->name('/confirms'); 
});


Route::group(['prefix'  =>  '/movil'], function() 
{
    Route::post('/register',                [ClientController::class,   'RegisterMovil'])->name('/register'); 
    Route::post('/files',                   [ClientController::class,   'FilesMovil'])->name('/files'); 
    Route::post('/files/delete',            [ClientController::class,   'DeleteFilesBS'])->name('/files/delete'); 
    Route::post('/confirms',                [ClientController::class,   'ConfirmPayment'])->name('/confirms'); 
});