<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\SessionController;
use App\Livewire\Events\Index;
use App\Livewire\Events\Create;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home.index');

Route::get('/events', Index::class);




// Route::get('/events', [EventController::class, 'index'])->middleware('auth');
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
// Route::post('/events', [EventController::class, 'store'])->middleware('auth');
Route::get('/events/{event}', [EventController::class, 'show'])->middleware('auth');
Route::get('/events/{event}/edit', [EventController::class, 'edit'])->middleware('auth')->name('events.edit');
Route::patch('/events/{event}', [EventController::class, 'update'])->middleware('auth');
Route::delete('/events/{event}', [EventController::class, 'destroy'])->middleware('auth')->name('events.destroy');


// Auth
// Route::get('/register', [RegisteredUserController::class, 'create']);
// Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
