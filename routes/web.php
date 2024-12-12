<?php

use App\Http\Controllers\UsersController;
use App\Livewire\EditUser;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/users', [UsersController::class, 'render'])->name('users.show')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    '\Spatie\Permission\Middleware\PermissionMiddleware::class:users.edit',
    'verified',
]);

Route::get('/users/{id}', [UsersController::class, 'edit'])->name('users.edit')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    '\Spatie\Permission\Middleware\PermissionMiddleware::class:users.edit',
    'verified',
]);

