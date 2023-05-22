<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\StudentResource;
use App\Http\Resources\SuccessResource;
use App\Models\Student;
use App\Models\Success;

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
Route::get('students', function () {
    return StudentResource::collection(Student::all());
});
Route::get('succses', function () {
    return SuccessResource::collection(Success::all());
});
Route::get('students', function () {
    return StudentResource::collection(Student::paginate());
})->middleware('auth:api');;
Route::get('succses', function () {
    return SuccessResource::collection(Success::paginate());
})->middleware('auth:api');;
