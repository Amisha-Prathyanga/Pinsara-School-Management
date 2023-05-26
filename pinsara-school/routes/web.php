<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\StudentsController;
use App\Http\Controllers\Admin\GradesController;
use App\Http\Controllers\Admin\SubjectsController;
use App\Http\Controllers\Admin\AdvertismentController;
use App\Http\Controllers\Admin\NotificationsController;
use App\Http\Controllers\DashboardController;
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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::resource('admin/students', StudentsController::class);
Route::resource('admin/grades', GradesController::class);
Route::resource('admin/subjects', SubjectsController::class);
Route::resource('admin/advertisment', AdvertismentController::class);
Route::resource('admin/notifications', NotificationsController::class);