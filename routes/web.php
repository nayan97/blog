<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TagsController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ThemeController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\FrontendPageController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\PermissiondController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\PortfolioCategoryController;

Route::group(['middleware' => 'admin.redirect'], function(){
    Route::get ('admin-login', [LoginController::class,'ShowLoginForm'])-> name('admin.login');
    Route::post ('admin-login', [LoginController::class,'AdminLoginSystem'])-> name('admin.login.system');
});
   



Route::group(['middleware' => 'admin'], function(){
    Route::get ('admin-logout', [LoginController::class,'AdminLogoutSystem'])-> name('admin.logout.system');
    
    Route::get ('admin-dashboard', [DashboardController::class,'ShowAdminDashboard'])-> name('admin.dashboard');

    // Permission

    Route::get ('permission', [ PermissiondController::class,'index'])-> name('admin.permission');
    Route::post ('permission', [ PermissiondController::class,'store'])-> name('admin.permission.store');
    Route::get ('permission-delete/{id}', [ PermissiondController::class,'destroy'])-> name('admin.permission.destroy');
    Route::get ('permission-edit/{id}', [ PermissiondController::class,'edit'])-> name('admin.permission.edit');
    Route::post ('permission-update/{id}', [ PermissiondController::class,'update'])-> name('admin.permission.update');


    // Roles

    Route::get ('role', [ RoleController::class,'index'])-> name('admin.role');
    Route::post ('role', [ RoleController::class,'store'])-> name('admin.role.store');
    Route::get ('role-delete/{id}', [ RoleController::class,'destroy'])-> name('admin.role.destroy');
    Route::get('role-edit/{id}', [ RoleController::class,'edit'])-> name('admin.role.edit');
    Route::post('role-update/{id}', [ RoleController::class,'update'])-> name('admin.role.update');


    // Admins

    Route::get ('admin-all', [ AdminController::class,'index'])-> name('admin.all');
    Route::post ('admin-store', [ AdminController::class,'store'])-> name('admin.store');
    Route::get ('admin-delete/{id}', [ AdminController::class,'destroy'])-> name('admin.all.destroy');
    Route::get ('admin-edit/{id}', [ AdminController::class,'edit'])-> name('admin.all.edit');
    Route::post ('admin-update/{id}', [ AdminController::class,'update'])-> name('admin.update');


    //user profile routes
    
    Route::get ('admin-profile', [ ProfileController::class,'showProfilePage'])-> name('admin.profile');
    Route::post ('admin-profile-photo-upload/{id}', [ ProfileController::class,'uploadProfilePhoto'])-> name('admin.profile.photo.upload');
    Route::post ('admin-password-change/{id}', [ ProfileController::class,'passwordChange'])-> name('admin.password.change');

    // Tag Routs

    Route::get ('post-tags', [ TagsController::class,'index'])-> name('post.tag.index');
    Route::post ('post-tags', [ TagsController::class,'store'])-> name('post.tag.store');
   
    // Category Routs

    Route::get ('post-Category', [ CategoryController::class,'index'])-> name('post.category.index');
    Route::post ('post-Category', [ CategoryController::class,'store'])-> name('post.category.store');

        // Post Routs

        Route::resource ('/post', PostController::class );


        // Slider Route

        Route::resource ('/slider', SliderController::class );
        Route::resource ('/testimonial', TestimonialController::class );
        Route::resource ('/client', ClientController::class );
        Route::resource ('/counter', CounterController::class );
        Route::resource ('/portfolio-category', PortfolioCategoryController::class );
        Route::resource ('/portfolio', PortfolioController::class );

        Route::resource ('/theme', ThemeController::class );

    });

/**
 * FrontEnd Routes
 */
    Route::get ('/', [ FrontendPageController::class, 'showHomePage']) -> name('home.page');
    Route::get ('/blog', [ FrontendPageController::class, 'showBlogPage']) -> name('blog.page');
    Route::get ('/blog/{slug}', [ FrontendPageController::class, 'showSinglePost']) -> name('blog.single');
    Route::get ('/category/{slug}', [ FrontendPageController::class, 'showPostByCategory']) -> name('blog.post.category');
    Route::get ('/post-tag/{slug}', [ FrontendPageController::class, 'showPostByTag']) -> name('blog.post.tag');
    Route::get ('/post-search/{slug}', [ FrontendPageController::class, 'showPostBySearch']) -> name('blog.post.search');
    Route::get ('/contact', [ FrontendPageController::class, 'showcontactPage']) -> name('contact.page');
    Route::get ('/portfolios-single/{slug}', [ FrontendPageController::class, 'showSinglePortfolioPage']) -> name('portfolios.page');





