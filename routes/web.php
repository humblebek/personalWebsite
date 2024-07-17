<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\StatisticController;
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


Route::get('/', [Controller::class, 'index']);

Route::get('lang/{lang}', function($lang)
{
    session(['lang' => $lang]) ;
    return back() ;
})->name('lang');

  Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/dashboard',function(){return view('admin.layouts.main');})->name('admin.dashboard');
    Route::resource('about',AboutController::class);
    Route::resource('resume',ResumeController::class);
    Route::resource('service',ServiceController::class);
    Route::resource('skill',SkillController::class);
    Route::resource('statistic',StatisticController::class);
    Route::resource('projects',ProjectController::class);
    Route::resource('contact',ContactController::class);
    Route::resource('quote',QuoteController::class);
  });



require __DIR__.'/auth.php';
