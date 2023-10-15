<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [App\Http\Controllers\HomepageController::class, 'index'])->name('homepage');
Route::get('/projects', [App\Http\Controllers\ProjectsController::class, 'index'])->name('projects');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/projects.create', [App\Http\Controllers\ProjectsController::class, 'create'])->name('projects.create');
Route::post('/projects.store', [App\Http\Controllers\ProjectsController::class, 'store'])->name('projects.store');

