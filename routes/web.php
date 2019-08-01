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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*REST CONTROLLER*/
Route::prefix('permission')->group(function () {
    Route::get('index', 'Rest\PermissionController@index')->name('permission.index');
});

Route::prefix('user')->group(function () {
    Route::get('index', 'Rest\UserController@index')->name('user.index');
});

Route::prefix('userType')->group(function () {
    Route::get('index', 'Rest\UserTypeController@index')->name('userType.index');
});

Route::prefix('userTypePermission')->group(function () {
    Route::get('index', 'Rest\UserTypePermissionController@index')->name('userTypePermission.index');
});
/*REST CONTROLLER*/

/*VIEW CONTROLLER*/
Route::prefix('institution')->group(function () {
    Route::get('index', 'View\InstitutionViewController@index')->name('institution.index');
    Route::post('index', 'View\InstitutionViewController@AñadirInstitucion')->name('institution.add');
	Route::put('index', 'View\InstitutionViewController@EditarInstitucion')->name('institution.edit');
});

Route::prefix('career')->group(function () {
	Route::get('index', 'View\CareerViewController@index')->name('career.index');
    Route::get('data2', 'View\CareerViewController@data2')->name('career.data2');
    Route::put('index', 'View\CareerViewController@EditarCarrera')->name('career.edit');
    Route::post('index', 'View\CareerViewController@AñadirCarrera')->name('career.add');
});

/*VIEW CONTROLLER*/