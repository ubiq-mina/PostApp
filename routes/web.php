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

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('profile/{id}', [
    'as' => 'profile.view',
    'uses' => 'ProfileController@create'
]);

Route::get('intro', [
    'as' => 'profile.intro',
    'uses' => 'ProfileController@checkForm'
]);

Route::post('intro', [
    'as' => 'profile.intro',
    'uses' => 'ProfileController@checkForm'
]);

Route::get('editprofile', 'EditProfileController@create');

Route::post('comment', 'CommentController@submit')->name('home');
