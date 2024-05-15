<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockController;
=======
>>>>>>> 3d12110 (Create login and registration process)

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

<<<<<<< HEAD
Route::resource('products', ProductController::class);
Route::resource('stocks',   StockController::class);
=======
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
>>>>>>> 3d12110 (Create login and registration process)
