<?php

use Illuminate\Support\Facades\Route;

use Barryvdh\Debugbar\DataCollector\LivewireCollector;
use App\Http\Controllers\LivewireTestController;
use App\Http\Controllers\AlpineTestController;
use App\Http\Controllers\EventController;

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
    return view('calendar');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// 追記
Route::prefix('manager')
->middleware('can:manager-higher')
->group(function(){
    Route::get('events/past', [EventController::class, 'past'])->name('events.past');
    Route::resource('events', EventController::class);
});

Route::middleware('can:user-higher')
->group(function(){
    Route::get('index', function () {
        dd('user');
    });
});

Route::controller(LivewireTestController::class)
->prefix('livewire-test')->name('livewire-test.')->group(function() {
    Route::get('index', 'index')->name('index');
    Route::get('register', 'register')->name('register');
});

Route::get('alpine-test/index', [AlpineTestController::class, 'index']);