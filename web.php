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

Route::get('/home', 'HomeController@index');
/*Route::get('/contact', function(){ 
$contacts=DB::table('contacts')->get();
return view('contact',compact('contacts'));
});*/
Route::get('/contact', 'HomeController@contact');
Route::get('/add_contact', 'HomeController@add_contact');
Route::post('/save_contact', 'HomeController@save_contact');
Route::get('/delete/{id}', 'HomeController@delete_contact');
Route::get('/edit/{id}', 'HomeController@edit_contact');
Route::post('/update_contact', 'HomeController@update_contact');

