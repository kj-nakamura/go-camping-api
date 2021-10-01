<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CampsController;

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

// Route::group(['middleware' => ['api']], function () {
Route::get('/camps', [CampsController::class, 'index']);
Route::get('/camps/{id}', [CampsController::class, 'show']);
Route::post('/camps', [CampsController::class, 'store']);
Route::patch('/camps', [CampsController::class, 'update']);
Route::delete('/camps', [CampsController::class, 'destroy']);
// });

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
