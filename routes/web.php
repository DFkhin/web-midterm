<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/home', [
    HomeController::class, 'index'
])->name('home');


Route::resource('employeems', App\Http\Controllers\EmployeemsController::class);


Route::resource('employeeSalaries', App\Http\Controllers\Employee_salaryController::class);


Route::resource('employeeSalaries', App\Http\Controllers\Employee_salaryController::class);


Route::resource('departments', App\Http\Controllers\DepartmentController::class);


Route::resource('divisions', App\Http\Controllers\DivisionController::class);


Route::resource('countries', App\Http\Controllers\CountryController::class);


Route::resource('states', App\Http\Controllers\StateController::class);


Route::resource('cities', App\Http\Controllers\CityController::class);
