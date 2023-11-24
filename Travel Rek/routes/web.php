<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BackEnd\Bangkok\BangkokController;
use App\Http\Controllers\BackEnd\Dubai\DubaiController;
use App\Http\Controllers\BackEnd\Pattaya\PattayaController;
use App\Http\Controllers\BackEnd\Phuket\PhuketController;
use App\Http\Controllers\BackEnd\UserController;
use App\Http\Controllers\Frontend\FrontendController;
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

// Login
Route::group(['middleware'=>'guest'],function(){
    Route::get('auth/login',[AuthController::class,'loginView'])->name('login');
    Route::post('auth/login',[AuthController::class,'login'])->name('login');
// Register
    Route::get('auth/register',[AuthController::class,'registerView'])->name('register');
    Route::post('auth/register',[AuthController::class,'register'])->name('register');
});
Route::group(['middleware'=>'auth'],function(){
    // Password change
Route::post('user/password-change',[AuthController::class,'changePasswordPost'])->name('change-password');
// Users
Route::get('/user/my-profile',[UserController::class,'edit'])->name('myProfile');
Route::put('/user/my-profile-update',[UserController::class,'store'])->name('myProfile-update');
Route::get('/user/pages-faq',[FrontendController::class,'help'])->name('help');
Route::get('/user/contact-page',[FrontendController::class,'contact'])->name('contact');

// Bangkok
Route::get('/qtn-thailand-bangkok',[BangkokController::class,'index'])->name('bangkok');
Route::post('/qtn-thailand-bangkok-store-basic-details',[BangkokController::class,'basicDetailsStore'])->name('bangkok-store-basic');
Route::post('/qtn-thailand-bangkok-store',[BangkokController::class,'thailandStoreDetails'])->name('thailand-store');

// Pattaya
Route::get('/qtn-thailand-pattaya',[PattayaController::class,'index'])->name('pattaya');
Route::post('/qtn-thailand-pattaya-store-basic-details',[PattayaController::class,'basicDetailsStore'])->name('pattaya-store-basic');
Route::post('/qtn-thailand-pattaya-store',[BangkokController::class,'thailandStoreDetails'])->name('thailand-store-pattaya');

// Phuket
Route::get('/qtn-thailand-phuket&krabi',[PhuketController::class,'index'])->name('phuket');
Route::post('/qtn-thailand-phuket&krabi-store-basic-details',[PhuketController::class,'basicDetailsStore'])->name('phuket-store-basic');
Route::post('/qtn-thailand-phuket-store',[BangkokController::class,'thailandStoreDetails'])->name('thailand-store-phuket');

// Dubai
Route::get('/qtn-dubai',[DubaiController::class,'index'])->name('dubai');
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
});

Route::get('/',[FrontendController::class,'index'])->name('home');

// Admin
Route::get('admin/dashoard',[AdminController::class,'adminDashboard'])->name('admin');
Route::get('admin/dashoard/users-data',[AdminController::class,'usersData'])->name('usersData');