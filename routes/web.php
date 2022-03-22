<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CompanyController::class, 'index'])->name('index');
Route::get('/add', [CompanyController::class, 'create'])->name('add');
Route::post('/store', [CompanyController::class, 'store'])->name('store');
Route::get('/edit/{company:id}', [CompanyController::class, 'edit'])->name('edit');
Route::patch('/edit/{company:id}', [CompanyController::class, 'update'])->name('update');
Route::get('/delete/{company:id}', [CompanyController::class, 'destroy'])->name('delete');
