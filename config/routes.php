<?php

use App\Controllers\Admin\CategoriesController;
use App\Controllers\Admin\ProductController;
use App\Core\Request;
use App\Core\Route;
use App\Controllers\HomeController;
use App\Controllers\AuthController;
use App\Core\Upload;



$request = new Request();

//CLient
Route::get('/', HomeController::class . '@index');
Route::get('/register', HomeController::class . '@register');
Route::post('/createUser', AuthController::class . '@createUser');
Route::get('/formLogin', AuthController::class . '@getLogin');
Route::post('/login', AuthController::class . '@postLogin');
Route::get('/logout', AuthController::class . '@getLogot');

// admin
Route::get('/admin', ProductController::class . '@index');

Route::get('/admin/product/list', ProductController::class . '@list');
Route::get('/admin/product/{id}', ProductController::class . '@productDetail');
Route::get('/admin/product/create', ProductController::class . '@productCreate');
Route::post('/admin/product/save', ProductController::class . '@productSave');
Route::get('/admin/product/delete/{id}', ProductController::class . '@productDelete');

Route::get('/admin/categories/list', CategoriesController::class . '@list');
Route::get('/admin/categories/{id}', CategoriesController::class . '@categoriesDetail');
Route::get('/admin/categories/create', CategoriesController::class . '@categoriesCreate');
Route::post('/admin/categories/save', CategoriesController::class . '@categoriesSave');
Route::get('/admin/categories/update/{id}', CategoriesController::class . '@categoriesUpdate');
Route::post('/admin/categories/updateSave/{id}', CategoriesController::class . '@categoriesUpdateSave');
Route::get('/admin/categories/delete/{id}', CategoriesController::class . '@categoriesDelete');

Route::resolve();
