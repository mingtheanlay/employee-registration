<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Content\EmployeeController;
use App\Http\Controllers\Content\EmployeeRegisterController;
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
    return view('index');
})->name('/');

Route::get('/employee', [EmployeeController::class, 'index'])->name('employee');

Route::get('/employee_register', [EmployeeRegisterController::class, 'index'])->name('employee_register');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);