<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CV;
use App\Http\Controllers\AbonentController;
use App\Http\Controllers\CallController;
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
Route::get('/Bibika/cv',[CV::class,'show']
);
Route::resource('abonents',AbonentController::class);
Route::resource('calls',CallController::class);
