<?php

use App\Http\Controllers\StudentController;
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
    return view('student.create');
});

// Student - IMAGE CRUD

// Student Index Table
Route::get('students', [StudentController::class, 'index']);

// Create Student Data
Route::get('add-student', [StudentController::class, 'create']);

// Store Data
Route::post('add-student', [StudentController::class, 'store']);

// Edit Data
Route::get('edit-student/{id}', [StudentController::class, 'edit']);

// Update Student Data
Route::put('update-student/{id}', [StudentController::class, 'update']);

// Delete Data Using Get Method
Route::get('delete-student/{id}', [StudentController::class, 'destroy']);

//Delete Data Using Delete Method
Route::delete('delete-student/{id}', [StudentController::class, 'destroy']);
