<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('login',[LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::view('/', 'home');
Route::get('homepage',function(){
    return view('homepage');
})->middleware('auth')->name('homepage');

Route::middleware(['auth'])->group(function () {
Route::get('dashboard-analysis',[StudentController::class, 'dashboard'])->name('dashboard-analysis');
Route::get('reports',[StudentController::class, 'reports'])->name('reports');
Route::get('settings',[StudentController::class, 'settings'])->name('settings');
Route::get('studentEdit',[RegisterController::class, 'editStudent'])->name('studentEdit');
Route::get('edit/{id}',[RegisterController::class, 'edit'])->name('edit');
});

Route::get('register',[RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register',[RegisterController::class, 'store']);
Route::post('edit/{id}',[RegisterController::class, 'update']);


