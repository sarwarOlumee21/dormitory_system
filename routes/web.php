<?php

use App\Http\Controllers\ResidentController;
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

Route::get('/home', [ResidentController::class, 'index'])->name('home');
Route::get('/resident/resident_register', [ResidentController::class, 'ResidentRegister'])->name('resident.register');
Route::get('/resident/resident_list',[
    ResidentController::class, 'ResidentList'
])->name('resident.list');
