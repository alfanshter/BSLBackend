<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\DailyActivityController;
use App\Http\Controllers\JobRevisiController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\UserGroupController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/jsa-post', [JobRevisiController::class, 'store']);

Route::post('/auth', [AuthController::class, 'loginApi']);
Route::post('/create_user', [AuthController::class, 'create_user']);
Route::get('/profilApi', [UserController::class, 'profilApi']);
Route::get('/getTl', [UserController::class, 'getTl']);
Route::post('/create_group', [UserGroupController::class, 'create_group']);
Route::get('/attendence', [AttendenceController::class, 'attendenceApi']);
Route::post('/checkin', [AttendenceController::class, 'checkin']);
Route::post('/checkout', [AttendenceController::class, 'checkout']);
Route::post('/overtime', [AttendenceController::class, 'overtime']);

Route::get('/notifikasi', [NotifikasiController::class, 'index']);
Route::post('/notifikasi', [NotifikasiController::class, 'store']);

Route::post('/dailyactivity', [DailyActivityController::class, 'store']);
Route::post('/editdaily', [DailyActivityController::class, 'edit']);
Route::get('/dailyactivity/{id_user?}', [DailyActivityController::class, 'index']);
Route::get('/work_onprogress/{id_user?}', [DailyActivityController::class, 'work_onprogress']);
