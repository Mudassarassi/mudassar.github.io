<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\LoginController;

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
    return redirect()->route('emp.index');
});


Route::resource('emp', EmpController::class);

route::get('search', [EmpController::class, 'search'])->name('emp.search');

route::get('login', [LoginController::class, 'login'])->name('login.index');

route::post('register', [LoginController::class, 'register'])->name('register.index');
