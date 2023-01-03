<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\EditController;
use App\Http\Controllers\admin\DeleteController;
use App\Http\Controllers\admin\AddItemController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\EditCategoryController;
use App\Http\Controllers\admin\AddCategoryController;
use App\Http\Controllers\admin\SwitchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FilterController;


// Route::get('/', function () {
//     return view('welcome');
// });
/* Admin */

Route::get('/admin',[LoginController::class,'index']);
Route::post('/admin/login',[LoginController::class,'login']);
Route::get('/admin/dashboard',[DashboardController::class,'index']);
Route::get('/admin/dashboard/filter/{id}',[DashboardController::class,'filter']);
Route::get('/admin/dashboard/edit/{id}',[EditController::class,'index']);
Route::post('/admin/dashboard/edit/{id}',[EditController::class,'update']);
Route::get('/admin/dashboard/delete/{id}',[DeleteController::class,'delete']);
Route::get('/admin/dashboard/add',[AddItemController::class,'index']);
Route::post('/admin/dashboard/add',[AddItemController::class,'create']);
Route::get('/admin/dashboard/category',[CategoryController::class,'index']);
Route::get('/admin/dashboard/category/edit/{id}',[EditCategoryController::class,'index']);
Route::post('/admin/dashboard/category/edit/{id}',[EditCategoryController::class,'update']);
Route::get('/admin/dashboard/category/add',[AddCategoryController::class,'index']);
Route::post('/admin/dashboard/category/add',[AddCategoryController::class,'create']);
Route::get('/admin/dashboard/category/delete/{id}',[DeleteController::class,'delete_category']);
Route::get('admin/dashboard/category/switch/{id}',[SwitchController::class,'index']);


/* User */

Route::get('/',[HomeController::class,'index']);
Route::get('/category',[FilterController::class,'index']);