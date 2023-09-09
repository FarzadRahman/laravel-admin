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
});

Route::get('/blank', function () {
    return view('blank');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('test', [\App\Http\Controllers\TestController::class, 'index']);
Route::get('data-table', [\App\Http\Controllers\TestController::class, 'dataTable']);
Route::post('data-table', [\App\Http\Controllers\TestController::class, 'getData'])->name('datatable.getData');

