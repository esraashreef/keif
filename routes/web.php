<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\questioncontroller ;
use App\Http\Controllers\auth\Registercontroller ;
use App\Http\Controllers\auth\logincontroller;
use App\Http\Controllers\dashboardcontroller ;
use App\Http\Controllers\auth\logoutcontroller ;
use App\Http\Controllers\showcontroller ;
use App\Http\Controllers\answercontroller ;
use App\Http\Controllers\categorycontroller ;
use App\Http\Controllers\LocalizationController ;
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


Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/dashboard',[dashboardcontroller::class,'index']) ->name('dashboard');
Route::get('/register',[Registercontroller::class,'index']);
Route::post('/register',[Registercontroller::class,'store']);
Route::post('/logout',[logoutcontroller::class,'store']);
Route::get('/login',[logincontroller::class,'index']);
Route::post('/login',[logincontroller::class,'store']);
//Route::get('/questions', function () {
 //   return view('questions/index');
//});
Route::get('/questions',[questioncontroller::class,'index'])->name('questions');
Route::post('/questions',[questioncontroller::class,'store']);
Route::get('/question/{id}',[showcontroller::class,'index'])->name('question');
Route::get('/question/{id}/edit',[questioncontroller::class,'edit']);
Route::delete('/question/{id}',[questioncontroller::class,'destroy']);
Route::delete('/answer/{id}',[answercontroller::class,'destroy']);
Route::post('/question/{id}/update',[questioncontroller::class,'update']);
Route::get('/country/{country_name}/{city_name}/news',[showcontroller::class,'index']);     
Route::post('/answer/{id}',[answercontroller::class,'store']);
Route::get('/answer/{id}/edit',[answercontroller::class,'edit']);
Route::post('/answer/{aid}/{qid}/update',[answercontroller::class,'update']);
Route::get('/categories/{category}',[categorycontroller::class,'index']);
Route::get('/search', [questionController::class, 'search']);
Route::get('change/lang', [LocalizationController::class, "lang_change"])->name('LangChange');
