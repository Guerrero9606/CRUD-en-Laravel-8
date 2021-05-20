<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
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
    return view('auth.login');
});
/*
Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/contacto', function () {
    return view('contacto');
}); 
*/
/* Route::get('/bienvenido', ['middleware' => 'NuevoMiddleware', function(){
    return '<h1>Probando ruta con middleware</h1>';
}]);*/
//Route::resource('clientes', ClienteController::class);

Route::resource('empleado', EmpleadoController::class)->middleware('auth');
Auth::routes();

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::group(['middleware', 'auth'], function () {
    Route::get('/',[EmpleadoController::class, 'index'])->name('home');
});