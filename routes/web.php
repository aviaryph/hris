<?php

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
    return view('login');
});

Route::resource('dashboard', 'DashboardController');
Route::resource('company', 'CompanyController');
Route::resource('branch', 'BranchController');
Route::resource('department', 'DepartmentController');
Route::resource('designation', 'DesignationController');
