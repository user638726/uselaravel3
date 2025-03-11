<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

use App\Models\Student;// });
//Route::get('/students_create', [StudentController::class, 'create']);
//Route::get('/students_index', [StudentController::class, 'index']);
//Route::get('/students_excel', [StudentController::class, 'excel']);
//Route::get('/students_hello', [StudentController::class, 'sayHello']);
Route::resource('students', StudentController::class);
