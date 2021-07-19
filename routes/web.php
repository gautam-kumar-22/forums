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



Auth::routes();



Route::group(['prefix' => 'admin',  'middleware' => 'admin.auth'], function (){

    Route::resource('users', UsersController::class);
    Route::resource('forms', FormController::class);
    Route::get('form-list/{id}',[FormController::class, 'getFormOneList'])->name('form-list');
    Route::get('form-details/{id}',[FormController::class, 'formonedetail'])->name('form-details');

});




// Route::get('/form-one',[FormController::class, 'formOne'])->name('form.one');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/larger-order-form', [MyController::class, 'index'])->name('form-one');
Route::post('form-one-store',[MyController::class, 'formOnesubmit'])->name('form.one.store');


Route::get('/box-ship-order-form', [MyController::class, 'indexFormTwo'])->name('form-two');
Route::post('form-two-store',[MyController::class, 'formTwosubmit'])->name('form.two.store');


Route::get('/real-estate-program-sign', [MyController::class, 'indexFormThree'])->name('form-three');
Route::post('form-three-store',[MyController::class, 'formThreesubmit'])->name('form.three.store');


Route::get('/carporate-gift-program', [MyController::class, 'indexFormFour'])->name('form-four');
Route::post('form-four-store',[MyController::class, 'formFoursubmit'])->name('form.four.store');

Route::get('/realtor-program', [MyController::class, 'indexFormFive'])->name('form-five');
Route::post('form-five-store',[MyController::class, 'formFivesubmit'])->name('form.five.store');

Route::get('/gift-reminder', [MyController::class, 'indexFormSix'])->name('form-six');
Route::post('form-six-store',[MyController::class, 'formSixsubmit'])->name('form.six.store');
