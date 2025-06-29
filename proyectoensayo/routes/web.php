<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\CourseManagementController;
use App\Http\Controllers\Admin\TeacherManagementController;
use App\Http\Controllers\Admin\StudentManagementController;
use App\Http\Controllers\Admin\EnrollmentManagementController;
use App\Http\Controllers\Admin\GradeManagementController;
use App\Http\Controllers\ProductoController; 
use App\Http\Controllers\Admin\UserController;

// Ruta pública
Route::get('/', function () {
    return view('welcome');
});

// Ruta de dashboard redirigida según el rol del usuario
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Perfil del usuario
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Dashboards por rol
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboards.admin');
    })->name('admin.dashboard');

    Route::get('/teacher/dashboard', function () {
        return view('dashboards.teacher');
    })->name('teacher.dashboard');

    Route::get('/student/dashboard', function () {
        return view('dashboards.student');
    })->name('student.dashboard');
});
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', UserManagementController::class);
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('courses', CourseManagementController::class);
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('teachers', App\Http\Controllers\Admin\TeacherManagementController::class);
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('students', StudentManagementController::class);
});

Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::resource('enrollments', EnrollmentManagementController::class);
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/grades', [GradeManagementController::class, 'index'])->name('grades.index');
    Route::get('/grades/{grade}/edit', [GradeManagementController::class, 'edit'])->name('grades.edit');
    Route::put('/grades/{grade}', [GradeManagementController::class, 'update'])->name('grades.update');
});

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', UserController::class);
});

require __DIR__.'/auth.php';
