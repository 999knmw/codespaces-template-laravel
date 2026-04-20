<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CpanelController;

// Task 1: GET method form routes
Route::get('/form', [FormController::class, 'showForm'])->name('form.show');
Route::get('/submit-form', [FormController::class, 'processForm'])->name('form.process');

// Task 2: Session counter routes
Route::get('/session', [SessionController::class, 'index'])->name('session.index');
Route::get('/clear-session', [SessionController::class, 'clearSession'])->name('session.clear');

// Task 3: CPanel routes (protected)
Route::get('/login', [CpanelController::class, 'showLogin'])->name('login.show');
Route::post('/login', [CpanelController::class, 'login'])->name('login.submit');
Route::get('/cpanel', [CpanelController::class, 'cpanel'])->name('cpanel')->middleware('auth.session');
Route::get('/logout', [CpanelController::class, 'logout'])->name('logout');