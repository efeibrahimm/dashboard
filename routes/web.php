<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\loginController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/admin')->middleware('isLogin')->group(function(){
    Route::get('/', [loginController::class, 'login'])->name("login");
    Route::post('/login', [loginController::class, 'userLogin'])->name('user.login');
});

Route::prefix('/admin')->middleware('isAdmin')->group(function(){

    Route::get('/dashboard', [loginController::class, "index"])->name("dashboard");
    Route::get('/logout',[loginController::class,"logout"])->name("logout");

    Route::get('/general-settings',[GeneralSettingController::class,"index"])->name("admin.general-settings");
    Route::get('/general-settings-data',[GeneralSettingController::class,"data"])->name("admin.general-settings-data");
    Route::post('/general-settings',[GeneralSettingController::class,"update"])->name("admin.general-settings-update");

    //Blogs
    Route::get('/blogs',[BlogController::class,'index'])->name('admin.blogs');
    Route::any('/blog-data',[BlogController::class,'data'])->name('admin.blog-data');
    Route::post('/create-blog',[BlogController::class,'createBlog'])->name('admin.create-blog');
    Route::delete('/delete-blog/{id}',[BlogController::class,'deleteBlog'])->name('admin.delete-blog');
});
