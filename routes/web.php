<?php

use Illuminate\Support\Facades\Route;

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

// PHP IS AWESOME!
//Route::resource('posts', 'PostController-create');


//Route::resource('posts', '\App\Http\Controllers\PostController');//->middleware('auth');

/*
Route::get('simple-route', function () {
    return view('posts.create');
});

Route::get('/', function () {
    return view('welcome');
});
*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
