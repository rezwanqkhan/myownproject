<?php

use App\Http\Controllers\AboutController as frontendAboutController;
use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class,'index']);
Route::get('/frontend/post/{post}', [HomeController::class,'show'])->name('home.show');

Route::get('/about',[frontendAboutController::class,'index'])->name('about');

/* by adding middleware('auth') it meanst the admin or someone login can access the rouats */
Route::middleware('auth')->group(function() {
    Route::get('/dashboard', function () {
        return view('backend.dashboard.index');})->name('dashboard');
     
    Route::resource('post',PostController::class); 
    Route::get('admin/about',[AboutController::class,'index'])->name('about.index'); 
    //its for storing about data 
    Route::post('admin/about',[AboutController::class,'store'])->name('about.store');    



});




Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();



});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
