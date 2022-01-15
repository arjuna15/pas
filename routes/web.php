<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KepsekController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\KurikulumController;
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
    return redirect('/login');
});
Route::get('/password/reset', function () {
    return redirect('/login');
});
Route::get('/register', function () {
    return redirect('/login');
});

Auth::routes([
    'password.reset' => false,
    'verify' => false,
    'password.request' => false,
    'reset'=>false,
    'register' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add', [App\Http\Controllers\KurikulumController::class, 'add'])->name('add');
Route::get('/view', [App\Http\Controllers\KurikulumController::class, 'view'])->name('view');

Route::group(['middleware' => 'auth'], function(){

    Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

    Route::group(['middleware' => 'guru'], function(){
        Route::get('/guru/home', [GuruController::class, 'index'])->name('guru.home');
    });

    Route::group(['middleware' => 'kepsek'], function(){
        Route::get('/kepsek/home', [KepsekController::class, 'index'])->name('kepsek.home');
    }); 

    Route::group(['middleware' => 'kurikulum'], function(){
        Route::get('/kurikulum/home', [kurikulumController::class, 'index'])->name('kurikulum.home');
        Route::get('/kurikulum/add', [kurikulumController::class, 'add'])->name('kurikulum.add');
        Route::get('/kurikulum/view', [kurikulumController::class, 'view'])->name('kurikulum.view');
        Route::post('/kurikulum/store', [kurikulumController::class, 'store'])->name('kurikulum.store');
        Route::get('/kurikulum/create', [kurikulumController::class, 'create'])->name('kurikulum.create');
        Route::get('/kurikulum/destroy/{id}', [kurikulumController::class, 'destroy'])->name('kurikulum.destroy');
    });

});
