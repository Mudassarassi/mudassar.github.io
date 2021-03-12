<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\catalogController;

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
//Route::middleware(["showdate"])->group(function () {
Route::get('/', function () {
    return 'Pantalla principal';
});
Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/logout', function () {
    return 'Logout usuari';
});

//  *****Formulario de get y post esta en index de catalog ***
Route::any('/catalog/', function () {
    return view('/catalog/index');
});


Route::get('/catalog/show/{id}', function ($id) {
    return view('/catalog/show', ["id" => $id]);
});
Route::get('/catalog/create', function () {
    return view('/catalog/create');
});
Route::get('/catalog/edit/{id}', function ($id) {
    return view('catalog/edit', ["id" => $id]);
    
});
Route::get('/edit', [catalogController::class, "edit"]);

Route::any('/recibir', [catalogController::class, "index"]);
//});

Route::get("respuesta", function(){
    return response("Esto es un error te redirigo en 5 segundos", 404)
            -> header("refresh", "5; url=/P/public/");
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
