<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
Route::get('/employee', [EmployeeController::class , 'index'])->name('employee.index');
Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create'); // show form
Route::post('/employee/create', [EmployeeController::class, 'store'])->name('employee.store');  // handle POST
Route::get('/employee/{employee}/edit', [EmployeeController::class, 'edit']) ->name('employee.edit');
Route::put('/employee/{employee}/update',[EmployeeController::class, 'update']) -> name('employee.update'); //  ('/employee/{employee}/update) {employee} here is a parameter which ccntain ID of employee we click we use
// this ID at the control to automaticly find the employee from database
Route::delete('/employee/{employee}/destroy',[EmployeeController::class, 'destroy']) -> name('employee.destroy');

