<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{DashboardController,BlogController, AdminController,Auth\LoginController,Auth\ConfirmPasswordController};
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

            Route::get('/events', [BlogController::class, 'index'])->name('admin.blogs');
            Route::get('/event/create', [BlogController::class, 'create'])->name('admin.blog.create');
            Route::post('/event/save', [BlogController::class, 'store'])->name('admin.blog.save');
            Route::get('/event/edit/{id}', [BlogController::class, 'edit'])->name('admin.blog.edit');
            Route::post('/event/update/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
            Route::get('/event/view/{id}', [BlogController::class, 'view'])->name('admin.blog.view');
            Route::get('/event/delete/{id}', [BlogController::class, 'destroy'])->name('admin.blog.delete');
            Route::post('/event/massremove', [BlogController::class, 'massremove'])->name('admin.blog.massremove');
        });
    });    
});