<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserGroupController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\HotController;
use App\Http\Controllers\InternalController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\OvertimeController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\TesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DailyActivityController;
use App\Http\Controllers\FrontSuratIjinController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobRevisiController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\NpmController;
use App\Http\Controllers\PrettyCastController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RevisiController;
use App\Http\Controllers\ServicesController;

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

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/', [HomeController::class, 'index'])->middleware('guest');
Route::get('/about', [HomeController::class, 'about']);
Route::get('/projects', [HomeController::class, 'projects']);
Route::get('/history', [HomeController::class, 'history']);
Route::get('/team', [HomeController::class, 'team']);
Route::get('/partners', [HomeController::class, 'partners']);
Route::get('/testimonials', [HomeController::class, 'testimonials']);

Route::get('/services', [HomeController::class, 'services']);

Route::get('/services-plant-reengenering-&-modification',[ServicesController::class,'services1']);
Route::get('/services-maintenance-repair-&-overhoul',[ServicesController::class,'services2']);
Route::get('/services-plant-operation-&-maintenance',[ServicesController::class,'services3']);
Route::get('/services-plant-demolition-relocation-&-reactivation',[ServicesController::class,'services4']);
Route::get('/services-plant-equipment-fabrication-&-installation',[ServicesController::class,'services5']);
Route::get('/services-machine-maker',[ServicesController::class,'services6']);
Route::get('/services-warehouse-&-transportation-services',[ServicesController::class,'services7']);

Route::get('/products',[HomeController::class, 'products']);

Route::get('/products-demo',[ProductsController::class, 'demo']);

Route::get('/products-warehouse-solution',[ProductsController::class,'products1']);
Route::get('/products-industrial-manipulator',[ProductsController::class,'products2']);
Route::get('/products-industrial-steam-generator',[ProductsController::class,'products3']);
Route::get('/products-portable-cleaning-machine',[ProductsController::class,'products4']);
Route::get('/products-scruber-dryers-machine',[ProductsController::class,'products5']);
Route::get('/products-packaging',[ProductsController::class,'products6']);
Route::get('/products-welding',[ProductsController::class,'products7']);
Route::get('/products-industrial-door',[ProductsController::class,'products8']);

Route::get('/news', [HomeController::class, 'news']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/user-group', [UserGroupController::class, 'index'])->name('user-group');
Route::post('/user-group', [UserGroupController::class, 'store']);
Route::post('/edit-group', [UserGroupController::class, 'edit']);
Route::post('/delete-group', [UserGroupController::class, 'destroy']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user', [UserController::class, 'store']);
Route::get('/edit/user/{id}', [UserController::class, 'edit']);
Route::post('/update/user', [UserController::class, 'update']);
Route::delete('/delete/user/{id}', [UserController::class, 'destroy']);

Route::get('/job-safety-analysis', [JobRevisiController::class, 'index']);
Route::post('/jsa-post', [JobRevisiController::class, 'store']);
Route::delete('/delete-jsa/{id}', [JobRevisiController::class, 'delete']);
Route::post('/edit-jsa', [JobRevisiController::class, 'edit']);
Route::get('/download-jsa', [JobRevisiController::class, 'downloadJsa']);
Route::get('/filter-files-time', [JobRevisiController::class, 'filterByTime']);

Route::get('/pretty-cast', [PrettyCastController::class, 'index']);
Route::post('/pretty-post', [PrettyCastController::class, 'store']);
Route::delete('/pretty-delete/{id}', [PrettyCastController::class, 'delete']);
Route::post('/pretty-edit', [PrettyCastController::class, 'edit']);
Route::get('/pretty-time', [PrettyCastController::class, 'filterByTime']);

Route::get('/npm-view', [NpmController::class, 'index']);
Route::post('/npm-post', [NpmController::class, 'store']);
Route::delete('/npm-delete/{id}', [NpmController::class, 'delete']);
Route::post('/npm-edit', [NpmController::class, 'edit']);
Route::get('/npm-time', [NpmController::class, 'filterByTime']);

// Route::get('/job-safety-analysis', [JobController::class, 'index']);
Route::get('/job-safety-analysis/create', [JobController::class, 'create'])->name('create-job');
Route::post('/job-safety-analysis', [JobController::class, 'store']);
Route::get('/edit/job-safety-analysis/{id}', [JobController::class, 'edit']);;
Route::post('/update/job-safety-analysis', [JobController::class, 'update']);
Route::delete('/delete/job-safety-analysis/{id}', [JobController::class, 'destroy']);
Route::get('/job-safety-analysis/export/{id}', [JobController::class, 'export']);


Route::post('/add-aar', [JobController::class, 'storeAar']);
Route::post('/editadd-aar', [JobController::class, 'editAddAar']);
Route::post('/edit-aar', [JobController::class, 'updateAar']);
Route::post('/edit/update-aar', [JobController::class, 'editupdateAar']);
Route::post('/delete-aar', [JobController::class, 'destroyAar']);
Route::post('delete/aar/{id}', [JobController::class, 'editdestroyAar']);

Route::get('/internal-purchase-requestion', [InternalController::class, 'index']);
Route::get('/internal-purchase-requestion/create', [InternalController::class, 'create'])->name('create-internal');
Route::post('/internal-purchase-requestion', [InternalController::class, 'store']);
Route::get('/edit/internal-purchase-requestion/{id}', [InternalController::class, 'edit']);
Route::post('/update/internal-purchase-requestion', [InternalController::class, 'update']);
Route::delete('/delete/internal-purchase-requestion/{id}', [InternalController::class, 'destroy']);
Route::get('/internal-purchase-requestion/export/{id}', [InternalController::class, 'export']);

Route::post('/add-detail', [InternalController::class, 'storeDetail']);
Route::post('/editadd-detail', [InternalController::class, 'editAddDetail']);
Route::post('/edit-detail', [InternalController::class, 'updateDetail']);
Route::post('/edit/update-detail', [InternalController::class, 'editupdatedetail']);
Route::post('/delete-detail', [InternalController::class, 'destroyDetail']);
Route::post('delete/detail/{id}', [InternalController::class, 'editdestroydetail']);


Route::get('/hot-work-premit', [HotController::class, 'index']);
Route::get('/hot-work-premit/create', [HotController::class, 'create'])->name('create-hot');
Route::post('/hot-work-premit', [HotController::class, 'store']);
Route::get('/edit/hot-work-premit/{id}', [HotController::class, 'edit']);
Route::post('/update/hot-work-premit', [HotController::class, 'update']);
Route::delete('/delete/hot-work-premit/{id}', [HotController::class, 'destroy']);
Route::get('/hot-work-premit/export/{id}', [HotController::class, 'export']);

Route::post('/add-equipment', [HotController::class, 'storeEquipment']);
Route::post('/editadd-equipment', [HotController::class, 'editAddequipment']);
Route::post('/edit-equipment', [HotController::class, 'updateEquipment']);
Route::post('/edit/update-equipment', [HotController::class, 'editupdateequipment']);
Route::post('/delete-equipment', [HotController::class, 'destroyEquipment']);
Route::post('delete/equipment/{id}', [HotController::class, 'editdestroyequipment']);

Route::get('/work-at-height-premit', [WorkController::class, 'index']);
Route::get('/work-at-height-premit/create', [WorkController::class, 'create']);
Route::post('/work-at-height-premit', [WorkController::class, 'store']);
Route::get('/edit/work-at-height-premit/{id}', [WorkController::class, 'edit']);
Route::post('/update/work-at-height-premit', [WorkController::class, 'update']);
Route::delete('/delete/work-at-height-premit/{id}', [WorkController::class, 'destroy']);

Route::get('/overtime-work', [OvertimeController::class, 'index']);
Route::get('/overtime-work/create', [OvertimeController::class, 'create']);
Route::post('/overtime-work', [OvertimeController::class, 'store']);
Route::get('/edit/overtime-work/{id}', [OvertimeController::class, 'edit']);
Route::post('/update/overtime-work', [OvertimeController::class, 'update']);
Route::delete('/delete/overtime-work/{id}', [OvertimeController::class, 'destroy']);
Route::get('/overtime-work/export/{id}', [OvertimeController::class, 'export']);

Route::get('/attendence', [AttendenceController::class, 'index']);
Route::get('/attendence/filter', [AttendenceController::class, 'filter']);
Route::get('/attendence/create', [AttendenceController::class, 'create']);
Route::post('/attendence', [AttendenceController::class, 'store']);
Route::get('/edit/attendence/{id}', [AttendenceController::class, 'edit']);
Route::post('/update/attendence', [AttendenceController::class, 'update']);
Route::delete('/delete/attendence/{id}', [AttendenceController::class, 'destroy']);
Route::post('/print_attendence', [AttendenceController::class, 'print_attendence']);
Route::post('/export_excel', [AttendenceController::class, 'export']);

Route::get('/notifikasi', [NotifikasiController::class, 'index_admin']);
Route::post('/notifikasi', [NotifikasiController::class, 'store']);
Route::delete('/notifikasi/{id?}', [NotifikasiController::class, 'delete']);
Route::post('/editnotifikasi', [NotifikasiController::class, 'edit']);

Route::get('/daily', [DailyActivityController::class, 'index_admin']);
Route::get('/daily/filter', [DailyActivityController::class, 'filter']);
Route::post('/print_daily', [DailyActivityController::class, 'print_daily']);

Route::get('/suratijin/create', [FrontSuratIjinController::class, 'create'])->name('suratijin.create');
Route::post('/suratijin/store', [FrontSuratIjinController::class, 'store'])->name('suratijin.store');
Route::get('/suratijin/excel/{id}', [FrontSuratIjinController::class, 'excel'])->name('suratijin.excel');
Route::get('/suratijin/delete/{id}', [FrontSuratIjinController::class, 'delete']);
