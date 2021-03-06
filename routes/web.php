<?php

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
Route::put('/students/{student}', function () {
    return view('students.edit');
});
Route::post('/save', [StudentController::class,'save'])->name('student.save');
Route::get('/newStudent', [StudentController::class,'create'])->name('student.newtudent');