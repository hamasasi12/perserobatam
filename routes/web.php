<?php

use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MasterController::class,'index']);
Route::get('/auth-login-basic', [MasterController::class,'login']);
Route::get('/dashboard', [MasterController::class,'dashboard']);
Route::get('/data-dikerjakan', [MasterController::class,'data-dikerjakan']);
Route::get('/dikerjakan', [MasterController::class,'dikerjakan']);
Route::get('/form-hardware', [MasterController::class,'form-hardware']);
Route::get('/form-permintaan', [MasterController::class,'formpermintaan']);
Route::get('/form-resiko', [MasterController::class,'form-resiko']);
Route::get('/form-software', [MasterController::class,'form-software']);
Route::get('/form-tindaklanjut', [MasterController::class,'form-tindaklanjut']);
Route::get('/hardware', [MasterController::class,'hardware']);
Route::get('/history_pekerjaan', [MasterController::class,'history_pekerjaan']);
Route::get('/landing', [MasterController::class,'landing']);
Route::get('/pekerjaan_selesai', [MasterController::class,'pekerjaan_selesai']);
Route::get('/permintaan_masuk', [MasterController::class,'permintaan_masuk']);
Route::get('/permintaan_perbaikan', [MasterController::class,'permintaan_perbaikan']);
Route::get('/reques_user', [MasterController::class,'reques_user']);
Route::get('/software', [MasterController::class,'software']);
Route::get('/tindaklanjut_perbaikan', [MasterController::class,'tindaklanjut_perbaikan']);
