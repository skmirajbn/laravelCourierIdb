<?php

use App\Http\Controllers\ThanaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//create api to of district rest api in a group
Route::group(['prefix' => 'thana'], function () {
    Route::get('/', [ThanaController::class, 'all']);
    Route::get('/{id}', [ThanaController::class, 'one']);
    Route::get('/district/{id}', [ThanaController::class, 'byDistrict'])->name('getThanaByDistrict');

});

