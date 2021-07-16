<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ReservaController;


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

Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/employees/{employees}/edit', [EmployeeController::class, 'show']);

Route::get('/reservas', [ReservaController::class, 'index'])->name('reserva.index');
Route::post('/reservas/store', [ReservaController::class, 'store'])->name('reserva.store');
Route::get('/reservas/show/{id}', [ReservaController::class, 'show'])->name('reserva.show');
Route::get('/reservas/{id}/edit', [ReservaController::class, 'edit'])->name('reserva.edit');
Route::PUT('/reservas/update', [ReservaController::class, 'update'])->name('reserva.update');

//Route::resource('reservas', ReservaController::class);


Route::get('/mireserva', [ReservaController::class, 'edit'])->name('mireserva.index');

Route::get('/edit', [ReservaController::class, 'edit'])->name('edit.index');

Route::get('/admin', [adminController::class, 'index'])->name('admin.index');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
