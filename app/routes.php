<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses' => 'HomeController@index'));
Route::get('reg', array('uses' => 'HomeController@reg'));
Route::get('admin/eventEntry', array('uses' => 'EventsController@enter'));
Route::get('events', array('uses' => 'HomeController@events'));
Route::get('internals', array('uses' => 'HomeController@internals'));
Route::post('reg/validate/{field}', array('uses' => 'CollegeController@validate'));
Route::post('events/auth', array('uses' => 'EventsController@authenticate'));
Route::post('events/entered', array('uses' => 'EventsController@eventEntered'));
Route::get('admin', array('uses' => 'AdminController@index'));
Route::get('admin/allEvents', array('uses' => 'EventsController@viewAll'));
Route::get('admin/event/{id}', array('uses' => 'EventsController@getEvent'));
Route::post('events/modify', array('uses' => 'EventsController@eventModify'));
Route::get('member/logout', array('uses' => 'CollegeController@logout'));
Route::get('member/{field}', array('uses' => 'CollegeController@member'));
Route::get('member/coll/events', array('uses' => 'CollegeController@evReg'));
Route::get('admin/login', array('uses' => 'AdminController@login'));
Route::get('admin/addColleges', array('uses' => 'AdminController@addColleges'));
Route::get('admin/allColleges', array('uses' => 'AdminController@allColleges'));
Route::post('member/update', array('uses' => 'CollegeController@updateDetails'));
Route::get('admin/college/{id}', array('uses' => 'AdminController@getCollege'));
Route::post('admin/addCollege', array('uses' => 'AdminController@addCollege'));
