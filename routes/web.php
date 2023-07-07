<?php

use App\Http\Controllers\HitungController;
use App\Http\Controllers\KriteriaController;
use Illuminate\Support\Facades\Route;
use App\Models\alternatif;
use App\Http\Controllers\AlternatifController;


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

Route::get('/', function () {
    return view('page');
});

Route::get('/cafe', function () {
    return view('cafe');
});


Route::resource('alternatif',AlternatifController::class);
Route::resource('kriteria',KriteriaController::class);
Route::get('/Hitung', [HitungController::class, 'Hitung'])->name('Hitung');


Route::controller(KriteriaController::class)->group(function() {
    Route::get('kriteria/', 'index');
    Route::get('kriteria/add', 'add');
    Route::post('kriteria/store', 'store');
    Route::get('kriteria/edit/{id}', 'edit');
    Route::post('kriteria/update/{id}', 'update');
    Route::get('kriteria/delete/{id}', 'delete');
});


Route::controller(AlternatifController::class)->group(function() {
    Route::get('alternatif/', 'index');
    Route::get('alternatif/add', 'add');
    Route::post('alternatif/store', 'store');
    Route::get('alternatif/edit/{id}', 'edit');
    Route::post('alternatif/update/{id}', 'update');
    Route::get('alternatif/delete/{id}', 'delete');
});