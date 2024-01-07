<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeynotesController;
use App\Http\Controllers\SponsorsController;


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


/* Route::resource('keynotes', KeynotesController::class);
 */
Route::get('/sponsors', 'SponsorsController@index1'
)->name('sponsors') ;
Route::get('/videos-and-photos', 'VideosController@index'
)->name('videos-route.index');
Route::get('/', [HomeController::class, 'index'])->name('welcome');

/* Route::get('/keynotes', [KeynotesController::class, 'index'])->name('keynotes') ;
 */


/* Route::get('/sponsors', 'SponsorsController@index');
 */


/* 

Route::get('/dates', function () {
    return view('dates');

})->name('dates') ;


Route::get('/contact', function () {
    return view('contact');

})->name('contact') ;


Route::get('/call-for-papers', function () {
    return view('call-for-papers');

})->name('call-for-papers') ;

Route::get('/committees', function () {
    return view('committees');

})->name('committees') ;


Route::get('/exhibitors', function () {
    return view('exhibitors');

})->name('exhibitors') ;



Route::get('/guidelines', function () {
    return view('guidelines');

})->name('guidelines') ;



Route::get('/heraklion-and-crete', function () {
    return view('heraklion-and-crete');

})->name('heraklion-and-crete') ;


Route::get('/hotels', function () {
    return view('hotels');

})->name('hotels') ;





Route::get('/program', function () {
    return view('program');

})->name('program') ;

Route::get('/registration', function () {
    return view('registration');

})->name('registration') ;

Route::get('/social-events', function () {
    return view('social-events');

})->name('social-events') ;

Route::get('/special-sessions', function () {
    return view('special-sessions');

})->name('special-sessions') ;

Route::get('/student-contest', function () {
    return view('student-contest');

})->name('student-contest') ;
Route::get('/technical-tutorials', function () {
    return view('technical-tutorials');

})->name('technical-tutorials') ;
Route::get('/topics', function () {
    return view('topics');

})->name('topics') ;
Route::get('/venue', function () {
    return view('venue');

})->name('venue') ;
Route::get('videos-and-photos', function () {
    return view('videos-and-photos');

})->name('videos-and-photos') ;
 */