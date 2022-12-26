<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/join-us', [HomeController::class, 'joinUs'])->name('join-us');