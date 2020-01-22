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
Route::group(['middleware' => ['auth', 'sms']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/messages', 'MessageController@index')->name('message');
    Route::get('/my_insurance', 'InsuranceController@list')->name('my insurance');
    Route::get('/edit', 'EditController@edit')->name('edit');
    Route::post('/edit', 'EditController@store');
    Route::get('/cabinet', 'CabinetController@edit')->name('cabinet');
    Route::post('/cabinet', 'CabinetController@store');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/verify_sms', 'MessageController@verify')->name('sms');
    Route::post('/verify_sms', 'MessageController@check');
});

//Route::post('/register', 'insuranceController@register')->name('Registration');
//Insurance List
Route::get('/employee_insurance','InsuranceController@employee')->name('employee care');
Route::get('/annuity_insurance','InsuranceController@annuity')->name('annuity insurance');
Route::get('/life_insurance','InsuranceController@life')->name('life insurance');
Route::get('/travel_insurance','InsuranceController@travel')->name('travel insurance');

//Footer
Route::get('/news','NewsController@index')->name('news');
Route::get('/about','AboutController@index')->name('about');
Route::get('/audit','AuditController@index')->name('audit');

Route::get('/', 'MainController@index')->name('main');
//Route::get('/register', 'MainController@register')->name('main');

/*Route::post('/register', 'MainController@save');*/
/*Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'MainController@index')->name('welcome');
});*/
