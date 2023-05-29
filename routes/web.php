<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UserNeetCollegesController;
use App\Http\Controllers\Admin\EventController;
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
    return redirect('/home');
});

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'register'])->name('register-user');
Route::post('custom-register', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/overview', function () {
    return view('overview');
})->name('overview');

Route::get('/terms-and-conidtions', function () {
    return view('terms_and_conidtions');
})->name('terms_and_conidtions');

Route::get('/services', function () {
    return view('service');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// User Neet Colleges
Route::prefix('neet-college')->name('neet-college.')->group(function () {
    Route::get('check-pincode/{pincode?}', [UserNeetCollegesController::class, 'checkPincode'])->name('check-pincode');
    Route::get('rank', [UserNeetCollegesController::class, 'rankByMark'])->name('mark-rank');
    Route::get('list', [UserNeetCollegesController::class, 'collegeList'])->name('college-list');
    Route::post('checkout', [UserNeetCollegesController::class, 'checkout'])->name('checkout');
    Route::get('profile', [UserNeetCollegesController::class, 'show'])->name('profile');
    Route::resource('user', UserNeetCollegesController::class)->only(['index', 'store', 'update', 'destroy','new'])->middleware('auth:web');
});
Route::get('events', [EventController::class, 'archive'])->name('events');
Route::get('event/{slug}', [EventController::class, 'single'])->name('single');