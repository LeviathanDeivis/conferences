<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Admin\ConferenceController;
use Illuminate\Support\Facades\Auth;

/*Home */
Route::get('/', [ClientController::class, 'index']);

/* Client routes */
Route::get('/client/conferences', [ClientController::class, 'index']);
Route::get('/client/conference/{id}', [ClientController::class, 'show']);
Route::post('/client/conference/{id}/register', [ClientController::class, 'register']);

/* Employee routes */
Route::get('/employee/conferences', [EmployeeController::class, 'index']);
Route::get('/employee/conference/{id}', [EmployeeController::class, 'show']);

/* Admin routes */

Route::middleware('auth')->group(function () {
Route::get('/admin', [ConferenceController::class, 'adminHome']);
Route::get('/admin/conferences', [ConferenceController::class, 'index']);
Route::get('/admin/conferences/create', [ConferenceController::class, 'create']);
Route::post('/admin/conferences', [ConferenceController::class, 'store']);
Route::get('/admin/conferences/{id}/edit', [ConferenceController::class, 'edit']);
Route::put('/admin/conferences/{id}', [ConferenceController::class, 'update']);
Route::delete('/admin/conferences/{id}', [ConferenceController::class, 'destroy']);
Route::get('/admin/users', [\App\Http\Controllers\Admin\UserController::class, 'index']);
Route::get('/admin/users/{id}/edit', [\App\Http\Controllers\Admin\UserController::class, 'edit']);
Route::put('/admin/users/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update']);
});

/*Breeze auth*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';