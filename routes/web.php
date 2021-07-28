<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\maincontroller;

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

Route::get('/navbar', function () {
    return view('masterlayout/navbar');
});

Route::get('/footer', function () {
    return view('masterlayout/footer');
});

Route::get('/index',[maincontroller::class,'index'])->name('index');


// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/details', function () {
    return view('details');
});
Route::get('/about-us',[maincontroller::class,'aboutus'])->name('aboutus');

Route::get('/contact',[maincontroller::class,'contact'])->name('contact');

Route::get('/businesses', function () {
    return view('businesses');
});

// Route::get('/login', function () {
//     return view('login');
// });

// registration and login authentication
Route::post('/save_cust',[maincontroller::class,'save_cust'])->name('save_cust');
Route::post('/save_bizz',[maincontroller::class,'save_bizz'])->name('save_bizz');
Route::post('/check',[maincontroller::class,'check'])->name('check');
Route::post('/check2',[maincontroller::class,'check2'])->name('check2');
Route::get('/logout',[maincontroller::class,'logout'])->name('logout');

// Route::get('/logoutbizz',[maincontroller::class,'logoutbizz'])->name('logoutbizz');


Route::group(['middleware'=>['authcheck']], function(){
    Route::get('/login',[maincontroller::class,'login'])->name('login');
    Route::get('/register',[maincontroller::class,'register'])->name('register');
    Route::get('/dashboard',[maincontroller::class,'dashboard'])->name('dashboard');

    // Route::get('/bizzdashboard',[maincontroller::class,'bizzdashboard'])->name('bizzdashboard');

    Route::get('/setting',[maincontroller::class,'setting'])->name('setting');
    Route::get('/profile',[maincontroller::class,'profile'])->name('profile');
    Route::get('/staff',[maincontroller::class,'staff'])->name('staff');
});