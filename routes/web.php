<?php

use Illuminate\Support\Facades\Auth;

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
    return view('.index');
})->name('home');

Route::get('/home', function () {
    return redirect()->route('home');
});

Auth::routes();

// Redireccionando al login
Route::get('/admin', function ()
{
    return redirect()->route('login');

});

// Anulando la ventana del registrara
Route::get('/register', function ()
{
    return abort(404);
});

// Rutas del contacto
Route::prefix('contacts')->group(function ()
{
    Route::get('/', 'ContactController@index')->name('mails.index')->middleware('auth');
    Route::post('/store', 'ContactController@store')->name('mails.store');
});

Route::middleware(['auth'])->group(function ()
{
    Route::prefix('clients')->group(function ()
    {
        Route::get('/', 'ClientController@index')->name('clients.index');
        Route::get('/create', 'ClientController@create')->name('clients.create');
        Route::get('/edit/{client}', 'ClientController@edit')->name('clients.edit');
        Route::post('/store', 'ClientController@store')->name('clients.store');
        Route::put('/update/{client}', 'ClientController@update')->name('clients.update');
        Route::delete('/destroy/{client}', 'ClientController@destroy')->name('clients.destroy');
    
    });
    Route::prefix('dashboard')->group(function ()
    {
        Route::get('/', 'DashboardController@index')->name('dashboard.index');
    });
});