<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\View\MainController as ViewMainController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Admin\MainController;

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




Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__ . '/auth.php';

Route::get('/', [ViewMainController::class, 'index']);
Route::get('/get-offer', [ViewMainController::class, 'getOffer'])->name('getOffer');
