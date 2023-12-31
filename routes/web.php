<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('index');
})->name('dashboard');

Route::get('/blank', function () {
    return view('blank');
});

Route::get('login', function () {
    return view('login');
});
Route::get('form', [\App\Http\Controllers\TestController::class, 'form'])->name('form');
Route::get('test', [\App\Http\Controllers\TestController::class, 'index']);
Route::get('data-table', [\App\Http\Controllers\TestController::class, 'dataTable'])->name('datatable');
Route::post('data-table', [\App\Http\Controllers\TestController::class, 'getData'])->name('datatable.getData');
Route::get('table', [\App\Http\Controllers\TestController::class, 'table'])->name('table');
Route::get('profile', [\App\Http\Controllers\TestController::class, 'profile'])->name('profile');


Route::post('getpdf', [\App\Http\Controllers\TestController::class, 'getPdf'])->name('getpdf');
Route::get('oms', [\App\Http\Controllers\TestController::class, 'oms'])->name('oms');
Route::get('kyc-report', [\App\Http\Controllers\TestController::class, 'kycReport'])->name('kyc.report');
Route::get('export', [\App\Http\Controllers\TestController::class, 'export'])->name('export');
Route::get('import', [\App\Http\Controllers\TestController::class, 'import'])->name('import');

