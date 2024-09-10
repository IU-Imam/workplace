<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/findjob', function () {
  //  return view('findjob');
  //});
Route::get('/postjob', function () {
    return view('postjob');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/myposts', function () {
    return view('myposts');
});

Route::middleware(['auth'])->group(function () {
  Route::get('/profile',[ProfileController::class,'index'])->name('profile');
  Route::post('profile/{user}',[ProfileController::class, 'update'])->name('profile.update');
});
Route::get('/change-password', [App\Http\Controllers\HomeController::class, 'changePassword'])->name('change-password');
Route::post('/change-password', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('update-password');
Route::post('/postjob',  [App\Http\Controllers\PostController::class, 'store'])->name('postjob');

// The route we have created to show all  posts.
Route::get('findjob', [App\Http\Controllers\PostController::class, 'index']);
Route::get('myposts', [App\Http\Controllers\PostController::class, 'myposts']);

Route::get('/findjob/{post:post_id}', [App\Http\Controllers\PostController::class, 'show']);
Route::get('/userprofile/{user:id}', [App\Http\Controllers\HomeController::class, 'show']);


Route::get('/findjob/create/post', [\App\Http\Controllers\PostController::class, 'create']);  
Route::post('/findjob/create/post', [\App\Http\Controllers\PostController::class, 'store']); 
Route::get('/findjob/{jobPost}/edit', [\App\Http\Controllers\PostController::class, 'edit']);
Route::put('/findjob/{jobPost}/edit', [\App\Http\Controllers\PostController::class, 'update']); 
Route::delete('/findjob/{jobPost}', [\App\Http\Controllers\PostController::class, 'destroy']); 



