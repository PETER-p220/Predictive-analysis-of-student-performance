<?php

use App\Http\Controllers\auth\AdminController;
use App\Http\Controllers\PredictionsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
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

Route::get('predictions',[StudentController::class, 'getPredictions'])->name('predictions');
Route::get('form_1_profile',[PredictionsController::class, 'form1Edit'])->name('form_1_profile');
Route::post('form_1_profile',[PredictionsController::class, 'store'])->name('form_1_profile');


Route::get('form_1',[ClassController::class,'form1'])->name('form_1');
Route::get('form_2',[ClassController::class,'form2'])->name('form_2');
Route::get('form_3',[ClassController::class,'form3'])->name('form_3');
Route::get('form_4',[ClassController::class,'form4'])->name('form_4');
Route::get('view_predictions',[ClassController::class,'prediction'])->name('view_predictions');


Route::get('form_1_students',[ClassController::class,'form_1_students'])->name('form_1_students');
Route::get('form_2_students',[ClassController::class,'form_2_students'])->name('form_2_students');
Route::get('form_3_students',[ClassController::class,'form_3_students'])->name('form_3_students');
Route::get('form_4_students',[ClassController::class,'form_4_students'])->name('form_4_students');

Route::post('form_1',[ClassController::class,'store_1']);
Route::post('form_2',[ClassController::class,'store_2']);
Route::post('form_3',[ClassController::class,'store_3']);
Route::post('form_4',[ClassController::class,'store_4']);

Route::get('edit_form1/{id}',[ClassController::class,'edit_form1'])->name('edit_form1');
Route::get('edit_form4/{id}',[ClassController::class,'edit_form4'])->name('edit_form4');
Route::get('edit_form3/{id}',[ClassController::class,'edit_form3'])->name('edit_form3');
Route::get('edit_form2/{id}',[ClassController::class,'edit_form2'])->name('edit_form2');

Route::post('edit_form1/{id}',[ClassController::class,'update_1']);
Route::post('edit_form2/{id}',[ClassController::class,'update_2']);
Route::post('edit_form3/{id}',[ClassController::class,'update_3']);
Route::post('edit_form4/{id}',[ClassController::class,'update_4']);

Route::get('delete_form1/{id}',[ClassController::class,'delete_form1']);
Route::get('delete_form2/{id}',[ClassController::class,'delete_form2']);
Route::get('delete_form3/{id}',[ClassController::class,'delete_form3']);
Route::get('delete_form4/{id}',[ClassController::class,'delete_form4']);


Route::get('upload',[AdminController::class, 'upload'])->name('upload');
Route::post('upload',[AdminController::class, 'store']);
Route::get('register',[RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register',[RegisterController::class, 'store']);
Route::post('edit/{id}',[RegisterController::class, 'update']);

Route::get('/search', [RegisterController::class, 'search'])->name('search');


Route::get('form_1_profile/{prediction}', [PredictionsController::class, 'form1Edit'])->name('form_1_profile');
Route::put('form_1_profile/{prediction}', [PredictionsController::class, 'form1Update'])->name('form_1_update');



Route::get('/student/{id}', [PredictionsController::class, 'showStudentProfile'])->name('student_profile');
