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

//log in page
Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
//    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/edit', 'EditController@userEdit')->name('edit');
    Route::get('/cabinet', 'CabinetController@userCabinet')->name('cabinet');
    Route::post('/cabinet', 'CabinetController@userCabinetSave');
});

//Route::post('/register', 'insuranceController@register')->name('Registration');
//Insurance List
Route::get('/employee_insurance','insuranceController@employee')->name('employee care');
Route::get('/annuity_insurance','insuranceController@annuity')->name('annuity insurance');
Route::get('/life_insurance','insuranceController@life')->name('life insurance');
Route::get('/travel_insurance','insuranceController@travel')->name('travel insurance');

//Footer
Route::get('/news','newsController@index')->name('news');
Route::get('/about','aboutController@index')->name('about');
Route::get('/audit','auditController@index')->name('audit');

Route::get('/', 'MainController@index')->name('main');
//Route::get('/register', 'MainController@register')->name('main');

/*Route::post('/register', 'MainController@save');*/
/*Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'MainController@index')->name('welcome');
});*/
