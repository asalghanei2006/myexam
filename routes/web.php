<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login' , [HomeController::class , 'store'] )->name('login.store');
Route::get('/login' , [HomeController::class , 'create']);
Route::get('/show' , [HomeController::class , 'show'] )->name('show');
