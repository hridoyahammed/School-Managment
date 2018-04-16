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


Route::get('/contect/prodect', 'ContectController@book');


Route::get('/bari', function () {
    return view('home');
});

Route::group(['middleware'=>'auth'],function(){
	Route::resource('/try', 'regController');
	Route::resource('/subject', 'subjectController');
	Route::resource('/teacher', 'teacherController');
	Route::resource('/mark', 'markController');
	Route::resource('/attendenc', 'attendencController');
	Route::resource('/exam', 'examController');
	Route::resource('/class', 'ClassController');
	Route::get('/contect', 'ContectController@index');
});
   
   Route::resource('/admission', 'admissionController');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
