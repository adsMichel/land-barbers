<?php

use Illuminate\Support\Facades\Route;
use Modules\Client\Http\Controllers\ClientController;

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

Route::group([], function () {
    Route::resource('client', ClientController::class)->names('client');
    Route::get('create', [ClientController::class, 'create'])->name('client.create');
    Route::post('store', [ClientController::class, 'store'])->name('client.store');
    Route::get('edit/{id}', [ClientController::class, 'edit'])->name('client.edit');
    Route::put('update/{id}', [ClientController::class, 'update'])->name('client.update');
    Route::get('show', [ClientController::class, 'show'])->name('client.show');
    Route::delete('destroy/{id}', [ClientController::class, 'destroy'])->name('client.destroy');
});
