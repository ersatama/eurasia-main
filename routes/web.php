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


//Route::get('/',['uses'=>'HomeController@index','as'=>'Main Page']);


Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

Route::post('/hello', 'insuranceController@hello')->name('hello');
Route::get('/home', 'HomeController@index')->name('home');

//Route::post('/register', 'insuranceController@register')->name('Registration');
//Insurance List
Route::get('/employee_insurance','insuranceController@employee')->name('Employee Care');
Route::get('/annuity_insurance','insuranceController@annuity')->name('Annuity Insurance');
Route::get('/life_insurance','insuranceController@life')->name('Life Insurance');
Route::get('/travel_insurance','insuranceController@travel')->name('Travel Insurance');

//Footer
Route::get('/news','newsController@index')->name('News');
Route::get('/about','aboutController@index')->name('About');
Route::get('/audit','auditController@index')->name('Audit');

Route::get('/', 'MainController@index')->name('main');
//Route::get('/register', 'MainController@register')->name('main');

/*Route::post('/register', 'MainController@save');*/
/*Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'MainController@index')->name('welcome');
});*/
