<?php

use App\Http\Controllers\Admin\PropertyController as AdminPropertyController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('{category}', [PropertyController::class, 'category'])->name('property.category');
Route::get('property/{property}', [PropertyController::class, 'detail'])->name('property.detail');


Route::get('admin/login', function () {

    return view('auth.login');
});

//Admin dashboard Routes

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])
      ->get('/admin/ingresar-inmueble', [AdminPropertyController::class, 'create'])
      ->name('admin.create-property');


