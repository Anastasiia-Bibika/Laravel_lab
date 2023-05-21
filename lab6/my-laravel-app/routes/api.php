<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\AbonentResource;
use App\Http\Resources\CallResource;
use App\Models\Call;
use App\Models\Abonent;

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
Route::get('calls', function () {
    return CallResource::collection(Call::all());
});
Route::get('abonents', function () {
    return AbonentResource::collection(Abonent::all());
});
Route::get('calls', function () {
    return CallResource::collection(Call::paginate());
})->middleware('auth:api');;
Route::get('abonents', function () {
    return AbonentResource::collection(Abonent::paginate());
})->middleware('auth:api');;
