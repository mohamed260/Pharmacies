<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MedicineController;

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
    return view('master');
});
Route::get('/create', function () {
    return view('create');
})->middleware('auth');



Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin', function () {
        return view('admin');
    })->middleware('auth');

    Route::get('/edit/city/{id}', [ CityController::class, 'edit'])->name('editCity')->middleware('auth');
    Route::put('/update/city/{id}', [ CityController::class, 'update'])->name('updateCity')->middleware('auth');
    Route::delete('/delete/city/{id}', [ CityController::class, 'destroy'])->name('deleteCity')->middleware('auth');
});


Route::get('/profile/{id}', [UserController::class, 'index'])->name('profile')->middleware('auth');


Route::get('/edit/medicine/{id}', [ MedicineController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/update/medicine/{id}', [ MedicineController::class, 'update'])->name('update')->middleware('auth');
Route::delete('/delete/medicine/{id}', [ MedicineController::class, 'destroy'])->name('delete')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
