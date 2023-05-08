<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{DashboardController,AdminController,Auth\LoginController,Auth\ConfirmPasswordController};
use App\Http\Controllers\{UsersController,CustomerController,WalletController,TransactionsController,PartnersController};
use App\DataTables\{StudentsDataTable};

Route::group(['prefix'=>'admin/'], function(){
    Route::group(['namespace'=>'App\Http\Controllers\Admin'], function(){
        Route::get('/', [LoginController::class, 'showLoginForm'])->name('admin.login');
        Auth::routes(['register'=>false]);
        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::group(['middleware'=>'auth:admin'],function(){
            Route::any('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
            Route::get('master/students', function(StudentsDataTable $dataTable) {
                return $dataTable->render('backend.students');
            })->name('admin.students');           
                
            Route::get('settings', [AdminController::class, 'settings'])->name('admin.settings');
            Route::post('settings/update', [AdminController::class, 'updateSettings'])->name('admin.settings.update');

            // User
            Route::get('change-password', [ConfirmPasswordController::class, 'showConfirmForm'])->name('admin.change-password');
            Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
            Route::post('profile-update', [AdminController::class, 'updateProfile'])->name('admin.profile.update');          
        });
    });    
});