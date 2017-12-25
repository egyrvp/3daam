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

Route::get('recqueues/data', function () {
    return App\recqueue::latest()->get() ;
});


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('patients', 'patientController');

Route::resource('clinics', 'clinicController');

Route::resource('doctors', 'doctorController');









Route::resource('doctorclinics', 'doctorclinicController');



Route::resource('doctorcategories', 'doctorcategoryController');



Route::resource('examinations', 'examinationController');



Route::resource('queues', 'queueController');