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
Route::get('it_park','FrontendController@itPark');
Route::get('hospitality','FrontendController@hospitality');
Route::get('vacation_training','FrontendController@vacationTraining');
Route::get('our_story','FrontendController@ourStory');
//Route::get('/', 'PostController@all');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::get('/admin/{any}', function () {
//  return view('admin/post');
//})->where('any', '.*');

//Route::get('group_director','GroupDirectorController@view');
Route::resource('groupdirector', 'GroupDirectorController');


