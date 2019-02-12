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
Route::get('login', 'AuthenticationController@login');

Route::resource('dashboard', 'DashboardController');
Route::resource('company', 'CompanyController');
Route::resource('branch', 'BranchController');
Route::resource('department', 'DepartmentController');
Route::resource('designation', 'DesignationController');
Route::resource('employee', 'EmployeeController');
Route::resource('employee-award', 'EmployeeAwardController');
Route::resource('employee-setrole', 'EmployeeSetRoleController');
Route::resource('employee-transfer', 'EmployeeTransferController');
Route::resource('employee-resignation', 'EmployeeResignationController');
Route::resource('employee-travel', 'EmployeeTravelController');
Route::resource('employee-promotion', 'EmployeePromotionController');
Route::resource('employee-complain', 'EmployeeComplainController');
Route::resource('employee-warning', 'EmployeeWarningController');
Route::resource('employee-terminations', 'EmployeeTerminationController');
Route::resource('employee-lastlogin', 'EmployeeLastLoginController');
Route::resource('employee-exit', 'EmployeeExitController');
Route::resource('employee-leave', 'EmployeeLeaveController');
Route::resource('employee-profile', 'EmployeeProfileController');