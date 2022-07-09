<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\PatientAuthController;
use App\Http\Controllers\frontend\frontendcontroller;
use App\Http\Controllers\PatientProfileSettingsController;

/**
 *  Frontend Page Routes
 */
Route::get('/', [ frontendcontroller::class, 'ShowHomePage' ]) -> name('home.page');
Route::get('/login-page', [ frontendcontroller::class, 'ShowLoginPage' ]) -> name('login.page');

/**
 * Patient Register / Deshboard Routes
 */
Route::get('/patient-register', [ frontendcontroller::class, 'PatientRegPage' ]) -> name('patient.reg.page');
Route::get('/patient-deshboard', [ frontendcontroller::class, 'PatientDeshPage' ]) -> name('patient.desh.page') -> middleware('admin');
/**
 * Patient Profile Settings Routes
 */
Route::get('/patient-settings', [ PatientProfileSettingsController::class, 'PatientProfileSetting' ]) -> name('patient.prof.setting') -> middleware('admin');
Route::get('/patient-password-page', [ PatientProfileSettingsController::class, 'PatientPasswordPage' ]) -> name('patient.password') -> middleware('admin');
Route::post('/patient-password-change', [ PatientProfileSettingsController::class, 'PatientPasswordChange' ]) -> name('patient.pass.change') -> middleware('admin');

Route::post('/patient-register', [ PatientAuthController::class, 'Register' ]) -> name('patient.reg');
Route::post('/patient-login', [ PatientAuthController::class, 'Login' ]) -> name('patient.login');
Route::get('/patient-logout', [ PatientAuthController::class, 'Logout' ]) -> name('patient.logout');
/**
 * Doctor Register / Deshboard Routes
 */
Route::get('/doctor-register', [ frontendcontroller::class, 'DoctorRagPage' ]) -> name('doctor.reg.page');
Route::get('/doctor-deshboard', [ frontendcontroller::class, 'DoctorDeshPage' ]) -> name('doctor.desh.page');