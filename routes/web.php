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

<<<<<<< HEAD
Route::get('/', [App\Http\Controllers\HomepageController::class, 'index'])->name('homepage');
=======
Route::get('/', [App\Http\Controllers\Routing::class, 'homepage'])->name('homepage');
Route::get('/homepage', [App\Http\Controllers\Routing::class, 'homepage'])->name('homepage');
Route::get('/nope', [App\Http\Controllers\Routing::class, 'nope'])->name('nope');
>>>>>>> parent of 6deb4e9 (aswan help)
Route::get('/projects', [App\Http\Controllers\ProjectsController::class, 'index'])->name('projects');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ProjectsController.create', [App\Http\Controllers\ProjectsController::class, 'create'])->name('ProjectsController.create');
Route::post('/ProjectsController.store', [App\Http\Controllers\ProjectsController::class, 'store'])->name('ProjectsController.store');
<<<<<<< HEAD
=======
Route::get('/ProjectsController.show', [App\Http\Controllers\ProjectsController::class, 'show'])->name('ProjectsController.show');

Route::get('/ProjectsController.update/{id}', [App\Http\Controllers\ProjectsController::class, 'update'])->name('ProjectsController.update');
Route::post('/ProjectsController.edit/{id}', [App\Http\Controllers\ProjectsController::class, 'edit'])->name('ProjectsController.edit');
Route::delete('/ProjectsController.delete/{id}', [App\Http\Controllers\ProjectsController::class, 'delete'])->name('ProjectsController.delete');

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
Route::get('/user', [App\Http\Controllers\HomeController::class, 'show'])->name('user');

Route::get('HomeController.show', [App\Http\Controllers\HomeController::class, 'show'])->name('HomeController.show');
Route::post('/HomeController.update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('HomeController.update');
Route::get('/HomeController.edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('HomeController.edit');
Route::delete('/HomeController.delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('HomeController.delete');





>>>>>>> parent of 6deb4e9 (aswan help)


