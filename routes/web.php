<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\OrderController;
use \App\Http\Controllers\backend\SupplierController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
      Route::get('/',[\App\Http\Controllers\HomeController::class,'home'])->name('admin.route')->middleware('admin');

      Route::middleware(['web','auth'])->group(function(){
      Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

      Route::get('frontend/all/about', [\App\Http\Controllers\frontend\AboutController::class,'index'])->name('frontend.all.about');
      Route::get('frontend/all/services', [\App\Http\Controllers\frontend\ServicesController::class,'index'])->name('frontend.all.services');
      Route::get('frontend/all/contact', [\App\Http\Controllers\frontend\ContactController::class,'index'])->name('frontend.all.contact');
//    Route::get('frontend/all/product', [\App\Http\Controllers\frontend\ContactController::class,'product'])->name('frontend.all.product');

    Route::get('frontend/payment/{id}', [\App\Http\Controllers\frontend\FrontendController::class,'payment'])->name('frontend.payment');
    Route::get('frontend/product', [\App\Http\Controllers\frontend\OrderController::class,'index'])->name('frontend.product');



    Route::get('customer/register', [CustomerController::class,'register'])->name('customer.register');
    Route::post('customer/store', [CustomerController::class,'store'])->name('customer.store');


    Route::resource('product',ProductController::class);
    Route::resource('customer',CustomerController::class);
    Route::resource('order',OrderController::class);
    Route::resource('supplier',SupplierController::class);



    Route::prefix('/customer')->name('customer.')->namespace('Customer')->group(function() {
        Route::get('/dashboard', [\App\Http\Controllers\Frontend\HomeController::class, 'dashboard'])->name('home');
        Route::get('/profile', [\App\Http\Controllers\Frontend\HomeController::class, 'profile'])->name('profile');
        Route::namespace('Auth')->group(function () {
            //Login Routes
            Route::get('/login', [\App\Http\Controllers\Backend\Customer\Auth\LoginController::class, 'showLoginForm'])->name('login');
            Route::post('/login', [\App\Http\Controllers\Backend\Customer\Auth\LoginController::class, 'login']);
            Route::get('/logout', [\App\Http\Controllers\Backend\Customer\Auth\LoginController::class, 'logout'])->name('logout');

            //Forgot Password Routes
            Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
            Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');

            //Reset Password Routes
            Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
            Route::post('/password/reset', 'ResetPasswordController@reset')->name('password.update');

        });
    });

});


