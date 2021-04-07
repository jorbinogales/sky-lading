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

Auth::routes();

Route::get('/', function ()
{
    return redirect()->route('contacts.index');
});

Route::get('/home', function ()
{
    return redirect()->route('contacts.index');
});

// Redireccionando al login
Route::get('/admin', function ()
{
    return redirect()->route('login');
});

// Anulando la ventana del registrará
Route::get('/register', function ()
{
    return abort(404);
});

// Rutas del contacto

Route::middleware(['auth'])->group(function ()
{
    Route::get('/contacts', 'ContactController@index')->name('contacts.index');
});
