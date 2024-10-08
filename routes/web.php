<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PDFController;

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
    return redirect('/mahasiswa');
});
Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa.index');
Route::get('/generate-pdf', [PDFController::class, 'generatePDF'])->name('mahasiswa.pdf');

Route::resource('mahasiswa', MahasiswaController::class);
