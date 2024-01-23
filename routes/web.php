<?php

use App\Http\Controllers\Apuesta3DolaresController;
use App\Http\Controllers\Apuesta6DolaresController;
use App\Http\Controllers\Apuesta9DolaresController;
use App\Http\Controllers\ApuestaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\salaCONrivalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    route::get('apuestas',[ApuestaController::class,'apuesta'])->name('apuestas');

    Route::post('3DD', [Apuesta3DolaresController::class, 'agregarApuesta'])->name('3DD');
    route::get('salaa',[salaCONrivalController::class,'sala'])->name('salaa');

    route::get('6D',[Apuesta6DolaresController::class,'seisDOLARES'])->name('6D');

    route::get('9D',[Apuesta9DolaresController::class,'nueveDOLARES'])->name('9D');

});

require __DIR__.'/auth.php';
