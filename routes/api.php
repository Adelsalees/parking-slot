<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParkingSlotController;


use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\AppoinmetController;
use App\Models\Appoinmet;

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

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::post('make-appoinment',[AppoinmetController::class, 'create']);
   });
Route::get('get-pariking-slots',[ParkingSlotController::class,'index']);