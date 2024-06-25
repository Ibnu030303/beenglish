<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/courses/{courseId}/course', [HomeController::class, 'fetchCourse'])->name('courses.course');
Route::get('/courses/{courseId}/programs', [HomeController::class, 'fetchPrograms'])->name('courses.programs');
Route::get('/courses', [HomeController::class, 'showAllCourses'])->name('courses.showAll');
Route::get('/courses/{courseId}/programs', [HomeController::class, 'fetchPrograms'])->name('courses.fetchPrograms');
Route::get('/profiles', [HomeController::class, 'showProfile'])->name('profile.showProfile');
Route::get('/biaya', [HomeController::class, 'showBiaya'])->name('biaya.showBiaya');
Route::get('/biaya/{courseId}/programs', [HomeController::class, 'fetchPrograms'])->name('biaya.fetchPrograms');
Route::get('/daftar', [HomeController::class, 'register'])->name('daftar.register');
Route::post('/daftar', [HomeController::class, 'registerStore'])->name('daftar.registerStore');

