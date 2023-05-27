<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{DashboardController,CollegeController,RankingController,BlogController,BlogCategoryController,EventController,CategoryController, AdminController,Auth\LoginController,Auth\ConfirmPasswordController};
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

            Route::get('/events', [EventController::class, 'index'])->name('admin.events');
            Route::get('/event/create', [EventController::class, 'create'])->name('admin.event.create');
            Route::post('/event/save', [EventController::class, 'store'])->name('admin.event.save');
            Route::get('/event/edit/{id}', [EventController::class, 'edit'])->name('admin.event.edit');
            Route::post('/event/update/{id}', [EventController::class, 'update'])->name('admin.event.update');
            Route::get('/event/view/{id}', [EventController::class, 'view'])->name('admin.event.view');
            Route::get('/event/delete/{id}', [EventController::class, 'destroy'])->name('admin.event.delete');
            Route::post('/event/massremove', [EventController::class, 'massremove'])->name('admin.event.massremove');

            Route::get('event/categories', [CategoryController::class, 'index'])->name('admin.categories');
            Route::get('event/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
            Route::post('event/category/save', [CategoryController::class, 'store'])->name('admin.category.save');
            Route::get('event/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
            Route::post('event/category/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
            Route::get('event/category/view/{id}', [CategoryController::class, 'view'])->name('admin.category.view');
            Route::get('event/category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.category.delete');
            Route::post('event/category/massremove', [CategoryController::class, 'massremove'])->name('admin.category.massremove');

            Route::get('/colleges', [CollegeController::class, 'index'])->name('admin.colleges');
            Route::get('/collge/import', [CollegeController::class, 'import'])->name('admin.college.import');
            Route::post('/collge/do-import', [CollegeController::class, 'doImport'])->name('admin.college.doimport');
            Route::get('/college/edit/{id}', [CollegeController::class, 'edit'])->name('admin.college.edit');
            Route::post('/college/update/{id}', [CollegeController::class, 'update'])->name('admin.college.update');
            Route::get('/college/view/{id}', [CollegeController::class, 'view'])->name('admin.college.view');
            Route::get('/college/delete/{id}', [CollegeController::class, 'destroy'])->name('admin.college.delete');
            Route::post('/college/massremove', [CollegeController::class, 'massremove'])->name('admin.college.massremove');
             
            Route::get('/rankings', [RankingController::class, 'index'])->name('admin.rankings');
            // Route::get('/ranking/create', [RankingController::class, 'create'])->name('admin.event.create');
            // Route::post('/ranking/save', [RankingController::class, 'store'])->name('admin.event.save');
            Route::get('/ranking/edit/{id}', [RankingController::class, 'edit'])->name('admin.ranking.edit');
            Route::post('/ranking/update/{id}', [RankingController::class, 'update'])->name('admin.ranking.update');
            Route::get('/ranking/view/{id}', [RankingController::class, 'view'])->name('admin.ranking.view');
            Route::get('/ranking/delete/{id}', [RankingController::class, 'destroy'])->name('admin.ranking.delete');
            Route::post('/ranking/massremove', [RankingController::class, 'massremove'])->name('admin.ranking.massremove');

            Route::get('/blogs', [BlogController::class, 'index'])->name('admin.blogs');
            Route::get('/blog/create', [BlogController::class, 'create'])->name('admin.blog.create');
            Route::post('/blog/save', [BlogController::class, 'store'])->name('admin.blog.save');
            Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('admin.blog.edit');
            Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('admin.blog.update');
            Route::get('/blog/view/{id}', [BlogController::class, 'view'])->name('admin.blog.view');
            Route::get('/blog/delete/{id}', [BlogController::class, 'destroy'])->name('admin.blog.delete');
            Route::post('/blog/massremove', [BlogController::class, 'massremove'])->name('admin.blog.massremove');

            Route::get('blog/category', [BlogCategoryController::class, 'index'])->name('admin.blog.categories');
            Route::get('blog/category/create', [BlogCategoryController::class, 'create'])->name('admin.blog.category.create');
            Route::post('blog/category/save', [BlogCategoryController::class, 'store'])->name('admin.blog.category.save');
            Route::get('blog/category/edit/{id}', [BlogCategoryController::class, 'edit'])->name('admin.blog.category.edit');
            Route::post('blog/category/update/{id}', [BlogCategoryController::class, 'update'])->name('admin.blog.category.update');
            Route::get('blog/category/view/{id}', [BlogCategoryController::class, 'view'])->name('admin.blog.category.view');
            Route::get('blog/category/delete/{id}', [BlogCategoryController::class, 'destroy'])->name('admin.blog.category.delete');
            Route::post('blog/category/massremove', [BlogCategoryController::class, 'massremove'])->name('admin.blog.category.massremove');
        });
    });    
});