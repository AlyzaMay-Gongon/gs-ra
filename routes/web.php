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

// use App\Http\hofController;
// Route::get('customer_accounts',[hofController::class,'show']);

////////


Route::get('/', function () {
	return view('welcome');
});

Route::get('homepage_hof', function () {
	return view('homepage_hof');
})->name("hof_login");

Route::get('homepage_ceo', function () {
	return view('homepage_ceo');
})->name("ceo_login");

Route::get('home)', function () {
	return view('home');
})->name("bm_login");
Route::get('hofaddprofit', function () {
	return view('hofaddprofit');
});
Route::get('hofaddexpenses', function () {
	return view('hofaddexpenses');
});
Route::get('hofrentexpenses', function () {
	return view('hofrentexpenses');
});
Route::get('hofshoprepairexpenses', function () {
	return view('hofshoprepairexpenses');
});
Route::get('hoftransexpenses', function () {
	return view('hoftransexpenses');
});
Route::get('hofsalexpenses', function () {
	return view('hofsalexpenses');
});
Route::get('hoftransexpenses', function () {
	return view('hoftransexpenses');
});
Route::get('hofelecbillexpenses', function () {
	return view('hofelecbillexpenses');
});
Route::get('hofwaterbillexpenses', function () {
	return view('hofwaterbillexpenses');
});
Route::get('hofsuccess', function () {
	return view('hofsuccess');
});
Route::get('bmsuccess', function () {
	return view('bmsuccess');
});
Route::get('ceosuccess', function () {
	return view('ceosuccess');
});
Route::get('bmaddprofit', function () {
	return view('bmaddprofit');
});
Route::get('bmaddexpenses', function () {
	return view('bmaddexpenses');
});
Route::get('bmwaterbillexpenses', function () {
	return view('bmwaterbillexpenses');
});
Route::get('bmelecbillexpenses', function () {
	return view('bmelecbillexpenses');
});
Route::get('bmtransexpenses', function () {
	return view('bmtransexpenses');
});
Route::get('bmsalexpenses', function () {
	return view('bmsalexpenses');
});
Route::get('bmshoprepairexpenses', function () {
	return view('bmshoprepairexpenses');
});
Route::get('bmrentexpenses', function () {
	return view('bmrentexpenses');
});
Route::get('forgotpassword', function () {
	return view('forgotpassword');
});
Route::resource('hof', 'hofController');
Route::resource('ceo', 'ceoController');
Route::resource('bm', 'bmController');
Route::resource('forgotpassword', 'ForgotPasswordController');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('delete-records', 'App\Http\Controllers\HomeController@index');
Route::get('delete/{id}', 'App\Http\Controllers\HomeController@destroy');

Route::get('homepage_hof', 'App\Http\Controllers\ChartController@index')->name('chart.index');
Route::get('homepage_ceo', 'App\Http\Controllers\ChartceoController@index')->name('chart.index');
Route::get('home', 'App\Http\Controllers\ChartbrController@index')->name('chart.index');
Route::get('hof', 'App\Http\Controllers\hofController@index');
Route::get('hof', 'App\Http\Controllers\hofController@report');

Route::get('/homepage/{id}', 'App\Http\Controllers\UserController@profile')->name('homepage_hof.profile');
Route::get('/homepage_hof', 'App\Http\Controllers\UserController@edit')->name('homepage_hof.edit');
Route::post('/homepage_hof', 'App\Http\Controllers\Usercontroller@update_img')->name('homepage_hof.update_img');
Route::get('/homepage_hof', 'App\Http\Controllers\UserController@updateprof')->name('homepage_hof.updateprof');
Route::post('/homepage_hof', 'App\Http\Controllers\UserController@update')->name('homepage_hof.update');
Route::get('/hofindex/{AccountID}', 'App\Http\Controllers\hofController@show');

Route::get('/homepage/{id}', 'App\Http\Controllers\hofController@profile')->name('hofaddexpenses.profile');
Route::get('/hofaddexpenses', 'App\Http\Controllers\hofController@edit')->name('hofaddexpenses.edit');
Route::post('/hofaddexpenses', 'App\Http\Controllers\hofController@update')->name('hofaddexpenses.update');
Route::post('/sp_password', 'App\Http\Controllers\spController@update')->name('sp_password.update');
Route::get('/sp_password', 'App\Http\Controllers\spController@edit')->name('sp_password.edit');

//Route::post('/forgotpassword/update', 'ForgotPasswordController@update')->name('forgotpassword.update');
//Route::get('/forgotpassword/{forgotpassword}', 'ForgotPasswordController@edit')->name('forgotpassword.edit');
//
Route::post('update/forgotpassword', [App\Http\Controllers\ForgotPasswordController::class, 'update'])->name('forgotpassword');
Route::get('edit/forgotpassword', [App\Http\Controllers\ForgotPasswordController::class, 'edit'])->name('forgotpassword');

Route::get('/home', [App\Http\Controllers\ChartbrController::class, 'barChart'])->name('home');
