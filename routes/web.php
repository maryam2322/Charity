<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\postController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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
Route::get('/', [postController::class, 'index']);
Route::get('/post/{post}', [postController::class, 'show']);

Route::get('/pay-online', function () {
    return view('payment.index');
});
Route::post('/pay-store', [paymentController::class, 'add_order']);


Route::get('/myPayment', [paymentController::class, 'mypayment']);
Route::get('/report', [paymentController::class, 'PaymentList']);

Route::get('/monthlyreport', [paymentController::class, 'monthlyreport']);
Route::get('/yearlyreport', [paymentController::class, 'yearlyReport']);

Route::middleware('auth')->group(function () {
    Route::get('/contact', [postController::class, 'contactUs']);
    Route::post('/contact/store', [postController::class, 'contactUsStore']);

    Route::get('/about', function () {
        return view('resources.about');
    });
    Route::get('/gallery', [GalleryController::class, 'index']);
});


Route::get('/contact', [postController::class, 'contactUs']);
Route::post('/contact/store', [postController::class, 'contactUsStore']);

Route::get('/about', function () {
    return view('resources.about');
});
Route::get('/gallery', [GalleryController::class, 'index']);


Route::get('/role', [RoleController::class, 'index']);
Route::post('/role/add', [RoleController::class, 'addnewRole']);
Route::get('/Role/show', [RoleController::class, 'showRole']);
Route::get('/logout', [LoginController::class, 'destroy']);

Route::get('users', [UserController::class, 'index']);
Route::delete('users/{user}', [UserController::class, 'destroy']);
Route::get('users/{user}/edit', [UserController::class, 'edit']);
Route::patch('users/{user}', [UserController::class, 'update']);
Route::get('/editProfile', [LoginController::class, 'edit']);


Route::get('/signup', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login/signin', [LoginController::class, 'login']);



