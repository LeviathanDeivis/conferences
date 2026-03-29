<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ConferenceController;

Route::get('/', function () {
    return view('home');
});

Route::get('/client/conferences', [ClientController::class, 'index']);
Route::get('/client/conference/{id}', [ClientController::class, 'show']);
Route::post('/client/conference/{id}/register', [ClientController::class, 'register']);

Route::get('/employee/conferences', [EmployeeController::class, 'index']);
Route::get('/employee/conference/{id}', [EmployeeController::class, 'show']);

Route::get('/admin', [ConferenceController::class, 'adminHome']);
Route::get('/admin/users', [UserController::class, 'index']);
Route::get('/admin/users/{id}/edit', [UserController::class, 'edit']);
Route::get('/admin/conferences', [ConferenceController::class, 'index']);
Route::get('/admin/conferences/create', [ConferenceController::class, 'create']);
Route::get('/admin/conferences/{id}/edit', [ConferenceController::class, 'edit']);
Route::post('/admin/conferences/{id}/delete', [ConferenceController::class, 'destroy']);

Route::post('/admin/conferences', [ConferenceController::class, 'store']);
Route::delete('/admin/conferences/{id}', [ConferenceController::class, 'destroy']);
Route::put('/admin/conferences/{id}', [ConferenceController::class, 'update']);