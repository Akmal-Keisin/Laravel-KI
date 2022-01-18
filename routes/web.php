<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SessionLoginController;
use App\Http\Controllers\LocalizationController;
use App\Helpers\Validate;
use App\Http\Controllers\ServiceRepoController;

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
// Route::middleware(['check'])->group(function () {
    Route::get('/',[BookController::class, 'index']);
    Route::get('/insert',[BookController::class, 'create']);
    Route::post('/store',[BookController::class, 'store']);
    Route::get('/edit/{id}',[BookController::class, 'edit']);
    Route::put('/update/{id}',[BookController::class, 'update']);
    Route::get('/delete/{id}',[BookController::class, 'delete']);
    Route::get('/session',[SessionController::class, 'index']);
    Route::get('/session/get',[SessionController::class, 'show']);    
// });

Route::get('/login', [LoginController::class,'index']);
Route::post('/login', [LoginController::class,'auth']);
Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);

Route::get('/upload_file', [UploadController::class,'index']);
Route::post('/upload_file', [UploadController::class,'store']);
Route::get('/link', function () {
    return app('files')->link(storage_path('app'), public_path('uploads'));
});

Route::get('/test', function () {
    return Validate::bookName();
});

// Session Login
Route::get('/session-login', [SessionLoginController::class, 'login']);
Route::post('/session-login', [SessionLoginController::class, 'loginCheck']);
Route::get('/gagal-hack', function () {
    return view('session-login.gagal-hack');
});
Route::get('/session-test', function () {
    $session = Session::get('username');
    return $session;
});
Route::get('/session-dashboard', [SessionLoginController::class, 'index'])->middleware('session');

// Localization
Route::get('/localization/{locale}', [LocalizationController::class, 'index']);

// Repository & Service
Route::get('/repository', [ServiceRepoController::class, 'index']);