<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#methode get
Route::get('/animals', [AnimalController::class, 'index']);

#methode post
Route::post('/animals', [AnimalController::class, 'store']);

#methode put
Route::put('/animals/{id}', [AnimalController::class, 'update']);

#methode delete
Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);

#get all resorce student
#methode get
Route::get('/student', [StudentController::class, 'index']);

#menambahkan resorce student
#methode post
Route::post('/student', [StudentController::class, 'store']);

#update data student dengan id
#methode put
Route::put('/student/{id}', [StudentController::class, 'update']);

#delete data student dengan id
#methode delete
Route::delete('/student/{id}', [StudentController::class, 'destroy']);
