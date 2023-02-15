<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Admin\UserController;
use App\http\Controllers\HomeController;
use App\http\Controllers\student\PaymentController;
use App\http\Controllers\Admin\AdminPaymentController;


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

//controll home

route::get('/home',[HomeController::class,'index'])->name('index')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
]);
route::get('/dashboard',[HomeController::class,'index'])->name('index')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
]);

//..............admin...............
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'isAdmin'
])->prefix('/admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('Admin.index');
    })->name('dashboard');


route::get('/adminpaymentview',[AdminPaymentController::class,'AdminPaymentView'])->name('AdminPaymentView');

route::get('/adduser',[UserController::class,'adduser'])->name('adduser');

});


//............student...............
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'isStudent'
])->prefix('/student')->group(function () {


    Route::get('/dashboard', function () {
        return view('student.index');
    })->name('stdashboard');


route::get('/paymentdetail',[PaymentController::class,'paymentdetail'])->name('paymentdetail');
route::get('/addpayment',[PaymentController::class,'addpayment'])->name('addpayment');


route::post('/pay',[PaymentController::class,'pay'])->name('pay');


});
