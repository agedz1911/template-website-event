<?php

use App\Livewire\HomePage;
use App\Livewire\Pages\CongressInformation;
use App\Livewire\Pages\Registration;
use App\Livewire\Pages\ScientificProgram;
use App\Livewire\Pages\Submission;
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

Route::get('/', HomePage::class);
Route::prefix('/congress-information')->group(function () {
    Route::get('/', CongressInformation::class);
    Route::get('#welcome-message', CongressInformation::class);
});
Route::prefix('/scientific-program')->group(function () {
    Route::get('/', ScientificProgram::class);
});
Route::prefix('/submission')->group(function () {
    Route::get('/', Submission::class);
});

Route::get('/registration', Registration::class);

