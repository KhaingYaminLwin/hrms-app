<?php

use App\Http\Controllers\CitiesController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\DepartmentsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    // return view('welcome');
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/cities', CitiesController::class);

// Route::resource('/companies', CompaniesController::class);
Route::get('/companies', [CompaniesController::class, 'index'])->name('companies.index');
Route::get('/companies/create', [CompaniesController::class, 'create'])->name('companies.create');
Route::post('/companies/create', [CompaniesController::class, 'store'])->name('companies.store');
Route::get('/companies/edit/{id}', [CompaniesController::class, 'edit'])->name('companies.edit');
Route::patch('/companies/edit/{id}', [CompaniesController::class, 'update'])->name('companies.update');
// Route::post('/companies/update/{id}',[CompaniesController::class, 'update'])->name('companies.edit');
Route::delete('/companies/delete/{id}',[CompaniesController::class , 'delete'])->name('companies.delete');
// Route::patch('/companies/{post}', 'PostController@update');
// Route::patch('/companies', []);

// Route::resource('/departments', DepartmentsController::class);
Route::get('/departments', [departmentsController::class, 'index'])->name('departments.index');
Route::get('/departments/create', [departmentsController::class, 'create'])->name('departments.create');
Route::post('/departments/create', [departmentsController::class, 'store'])->name('departments.store');
Route::get('/departments/edit/{id}', [departmentsController::class, 'edit'])->name('departments.edit');
Route::patch('/departments/edit/{id}', [departmentsController::class, 'update'])->name('departments.update');
Route::delete('/departments/delete/{id}',[departmentsController::class , 'delete'])->name('departments.delete');

// Route::get('/employee', [EmployeesController::class, 'index'])->name('employee.index');
// Route::get('/employee/create', [EmployeesController::class, 'create'])->name('employee.create');
// Route::post('/employee/create', [EmployeesController::class, 'store'])->name('employee.store');
// Route::get('/employee/edit/{id}', [EmployeesController::class, 'edit'])->name('employee.edit');
// Route::post('/employee/edit/{id}', [EmployeesController::class, 'update'])->name('employee.update');
