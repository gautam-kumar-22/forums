<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\MyController;



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
    return redirect()->action([HomeController::class, 'index']);
});

Route::get('/test', [MyController::class, 'index']);


Auth::routes();



Route::group(['prefix' => 'admin',  'middleware' => 'admin.auth'], function (){

    Route::get('/', function () {
        return redirect()->action([UserController::class, 'index']);
    });

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // Route::get('/user', [UserController::class, 'index'])->name('user.index');

    // Route::get('/user.get_data',[UserController::class, 'get_data'])->name('get_data');
    Route::resource('users', UsersController::class);

    Route::resource('forms', FormController::class);


});




Route::get('/form-one',[FormController::class, 'formOne'])->name('form.one');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
