<?php

use App\Http\Controllers\ChannelController;
use Illuminate\Support\Facades\Route;

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

Route::get('/channels', [ChannelController::class, 'index'])->name('channels.index');
Route::get('/channels/create', [ChannelController::class, 'create'])->name('channels.create');
Route::post('/channels', [ChannelController::class, 'store'])->name('channels.store');
Route::get('/channels/{channel}', [ChannelController::class, 'show'])->name('channels.show');
Route::get('/channels/{channel}/edit', [ChannelController::class, 'edit'])->name('channels.edit');
Route::put('/channels/{channel}', [ChannelController::class, 'update'])->name('channels.update');
Route::delete('/channels/{channel}', [ChannelController::class, 'destroy'])->name('channels.destroy');
