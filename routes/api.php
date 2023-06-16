<?php

use App\Http\Controllers\riwayatController;
use App\Http\Controllers\penggunaController;
use App\Models\pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/riwayat',[riwayatController::class, 'index']);
Route::get('/pengguna',[penggunaController::class, 'pengguna']);
Route::post('/topup',[riwayatController::class, 'add']);
Route::post('/pengguna',[penggunaController::class, 'add']);
Route::put('/edit/{id}',[penggunaController::class, 'update']);
Route::delete('/delete/{id}',[penggunaController::class, 'delete']);
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
