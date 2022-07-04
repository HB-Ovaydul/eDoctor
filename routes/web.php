<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\PatientAuthController;
use App\Http\Controllers\frontend\frontendcontroller;

/**
 *  Frontend Page Routes
 */
Route::get('/', [ frontendcontroller::class, 'ShowHomePage' ]) -> name('home.page');
Route::get('/login-page', [ frontendcontroller::class, 'ShowLoginPage' ]) -> name('login.page');

/**
 * Patient Register / Deshboard Routes
 */
Route::get('/patient-register', [ frontendcontroller::class, 'PatientRegPage' ]) -> name('patient.reg.page');
Route::get('/patient-deshboard', [ frontendcontroller::class, 'PatientDeshPage' ]) -> name('patient.desh.page');
Route::post('/patient-register', [ PatientAuthController::class, 'Register' ]) -> name('patient.reg');
/**
 * Doctor Register / Deshboard Routes
 */
Route::get('/doctor-register', [ frontendcontroller::class, 'DoctorRagPage' ]) -> name('doctor.reg.page');
Route::get('/doctor-deshboard', [ frontendcontroller::class, 'DoctorDeshPage' ]) -> name('doctor.desh.page');