<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ParcelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Middleware\CheckAdminRole;
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


Route::get('payments', function () {
    return view('payments');
})->name('payments');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile-avatar-update', [ProfileController::class, 'updateAvatar'])->name('profile.profile-avatar-update');
    // Parsel
    Route::get('/create-parcel', [ParcelController::class, 'create'])->name('create-parcel');
    Route::post('/create-parcel', [ParcelController::class, 'store'])->name('store-parcel');
    Route::get('/parcels', [ParcelController::class, 'index'])->name('parcels');

    //Shop
    Route::get('/create-shop', [ShopController::class, 'create'])->name('create-shop');
    Route::post('/create-shop', [ShopController::class, 'store'])->name('store-shop');
    Route::get('/shops', [ShopController::class, 'index'])->name('shops');
    Route::get('/shop/{shop}', [ShopController::class, 'show'])->name('shop');

    // Tracking
    Route::get('/track-parcel/', [ParcelController::class, 'trackParsel'])->name('track-parsel-form');
    Route::get('/track-parcel/{parcel}', [ParcelController::class, 'trackParsel'])->name('track-parsel');



});

// create route group which will for for /admin
Route::group(['prefix' => 'management', 'as' => 'admin.', 'middleware' => ['auth', CheckAdminRole::class]], function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/all-shops', [AdminController::class, 'allShops'])->name('all-shops');
});


require __DIR__ . '/auth.php';
