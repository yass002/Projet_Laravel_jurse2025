<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\TweetsController;
use App\Http\Controllers\OrganizersController;
use App\Http\Controllers\KeynoteController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\SponsorsController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\VideosController;

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
    return view('auth.login');
});

// Route::get('/empleado', function () {
//     return view('empleado.index');
// });

// Route::get('empleado/create', [EmpleadoController::class, 'create']);

Route::resource('links', LinksController::class)->middleware('auth');
Route::resource('tweets', TweetsController::class)->middleware('auth');
Route::resource('organizers', OrganizersController::class)->middleware('auth');
Route::resource('keynotes', KeynoteController::class)->middleware('auth');
Route::resource('sessions', SessionsController::class)->middleware('auth');
Route::resource('sponsors', SponsorsController::class)->middleware('auth');
Route::resource('photos', PhotosController::class)->middleware('auth');
Route::resource('videos', VideosController::class)->middleware('auth');



// Auth::routes();
/* Auth::routes(['register' => false, 'reset' => false]);

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [EmpleadoController::class, 'index'])->name('home');
});
Route::get('/link', [LinksController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [LinksController::class, 'index'])->name('home');
}); */




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


   