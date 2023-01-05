<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TvController;
use App\Http\Controllers\ActorsController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/main', function () {
    return view('main');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	Route::get('/hello', function()
	{
		return View::make('hello');
	});

	Route::get('test',function(){
		return View::make('test');
	});

	Route::get('/', function () {
		return view('main');
	})->middleware('auth');
    
});

Route::group(['prefix' => 'college'], function()
{

	Route::get('/add', [CollegeController::class,'add'])->name('addcollege');
	Route::get('/show', [CollegeController::class,'show'])->name('stages');
	Route::post('/addcollege', [CollegeController::class,'addcollege'])->name('add.college');
	Route::get('/showstudent', [CollegeController::class,'showstudent'])->name('showstudent');
	Route::get('/deletecollege/{id}', [CollegeController::class,'deletecollege'])->name('deletecollege');
	Route::get('/deletestage/{id}', [CollegeController::class,'deletestage'])->name('deletestage');
	Route::post('/stages', [CollegeController::class,'addstage'])->name('addstages');
	Route::post('/addstudent', [StudentController::class,'store'])->name('addstudent');
	
});


