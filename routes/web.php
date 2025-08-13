<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\UserController;

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
// Login Routes
Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', [AuthenticationController::class, 'login'])->name('login');

// Register Routes
Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/register', [AuthenticationController::class, 'register'])->name('register');

// Admin Dashboard Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lp1', function () {
    return view('lp1');
});

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Users
Route::get('/admin/users', [UserController::class, 'index']);
Route::post('/admin/users', [UserController::class, 'store']);

Route::prefix('admin')->group(function () {
    Route::get('/educations', [App\Http\Controllers\EducationController::class, 'index']);
    Route::get('/skills', [App\Http\Controllers\SkillController::class, 'index']);
    Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index']);
    // Route::get('/experiences', [App\Http\Controllers\ExperienceController::class, 'index']);
    // Route::get('/achievements', [App\Http\Controllers\AchievementController::class, 'index']);
    // Route::get('/messages', [App\Http\Controllers\MessageController::class, 'index']);
});

use App\Http\Controllers\PersonalDetailsController;

Route::prefix('admin')->group(function () {
    Route::get('/personal-details', [PersonalDetailsController::class, 'index']);
    Route::post('/personal-details', [PersonalDetailsController::class, 'store']);
});