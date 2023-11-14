<?php

use App\Http\Controllers\ParcelController;
use App\Http\Controllers\ProfileController;
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
    return view('index');
})->name('home');

Route::get('track-parsel', function () {
    return view('trackParsel');
})->name('trackParsel');

Route::get('payments', function () {
    return view('payments');
})->name('payments');

Route::get('parsel-list', function () {
    return view('parselList');
})->name('parselList');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile-avatar-update', [ProfileController::class, 'updateAvatar'])->name('profile.profile-avatar-update');
    Route::get('/create-parcel', [ParcelController::class, 'create'])->name('create-parcel');
});


require __DIR__ . '/auth.php';
