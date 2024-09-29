<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/dashboard', [adminController::class, 'index'])->name('admin.index')->middleware(['auth', 'verified']);
Route::get('admin/edit/{id}', [adminController::class, 'editPage'])->name('admin.editPage')->middleware(['auth', 'verified']);
Route::get('admin/add', [adminController::class, 'add'])->name('admin.add')->middleware(['auth', 'verified']);
Route::get('admin/update', [adminController::class, 'edit'])->name('admin.edit')->middleware(['auth', 'verified']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/portfolio', ProjectController::class);



require __DIR__.'/auth.php';
