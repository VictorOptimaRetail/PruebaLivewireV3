<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Alpine;
use App\Livewire\Counter;
use App\Livewire\Form;
use App\Livewire\Lazy;
use App\Livewire\Nesting;
use Illuminate\Support\Facades\Route;

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

Route::redirect('/', '/counter');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/counter', Counter::class);
Route::get('/alpine', Alpine::class);
Route::get('/form', Form::class);
Route::get('/lazy', Lazy::class);
Route::get('/nesting', Nesting::class);

require __DIR__.'/auth.php';
