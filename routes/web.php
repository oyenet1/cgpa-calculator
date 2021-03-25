<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin.index');

Route::get('cgpa', 'CgpaController@index')->name('cgpa.index');

Route::get('calculate', 'CalculationController@calculate')->name('calculate')->middleware('auth');

// courses
Route::get('courses', 'CourseController@index')->name('courses.index');
Route::get('courses/{course}', 'CourseController@show')->name('courses.show');
Route::get('courses/{course}', 'CourseController@edit')->name('courses.edit');
Route::delete('courses/{course}', 'CourseController@destroy')->name('courses.destroy');

// profile
Route::get('/profile/{user:name}', 'ProfileController@index')->name('profile.show');
