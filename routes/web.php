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

// Route::get('/', function () {
// 	return view('welcome');
// });


//----------------------------------------------------------------------------------------------------------------
//HOMEWORK

// Route::get('task/complete/3', function() {
// 	dd('Đây là tính năng hoàn thành');
// })->name('todo.task.complete');

// Route::get('task/reset/3' , function(){
// 	dd('Day la tinh nang lam lai');
// })->name('todo.task.reset');


// Route::prefix('task') ->group(function() {

// 	Route::get('complete/3', function(){
// 		dd('Cong viec da hoan thanh !!');
// 	})->name('todo.task.complete');

// 	Route::get('reset/3', function(){
// 		dd('Da xoa cong viec !!!');
// 	})->name('todo.task.reset');

// });

//---------------------------------- HOME WORK LESSION 3--------------
// Route::get('/profile', function () {
	
// 	return view('profile',[
// 		'name' => 'Đỗ Tùng Lâm',
// 		'year' => 1998,
// 		'school' => 'Đại học kinh tế kỹ thuật công nghiệp',
// 		'home' => 'Hà Nội',
// 		'info' => 'chả có gì cả',
// 		'job' => 'Lập trình viên PHP'


// 	]);
	

// });

// Route::get('/list', function(){
// 	return view('list', ['list' => [
// 		[
// 			'name' => 'Học View trong Laravel',
// 			'status' => 0

// 		], 
// 		[
// 			'name' => 'Học Route trong Laravel',
// 			'status' => 1
// 		],

// 		[
// 			'name' => 'Lam bai tap View trong Laravel',
// 			'status' => -1

// 		]

// 	]]);
// });

//---------------------------------------------------------------------------------------------------LESSION4------

// Route::get('task/destroy/{id?}','Frontend\TaskController@destroy')->name('task.destroy');
// Route::get('task/complete/{id?}','Frontend\TaskController@complete')->name('task.complete');
// Route::get('task/recomplete/{id?}','Frontend\TaskController@reComplete')->name('task.reComplete');
// Route::resource('task', 'Frontend\TaskController');

// Route::get('task','Frontend\TaskController@index');

// Route::get('task/create','Frontend\TaskController@create');

// Route::get('task/store/{request}','Frontend\TaskController@store');

// Route::get('task/edit/{id?}','Frontend\TaskController@edit');

// Route::get('task/update/{request}','Frontend\TaskController@update');

// Route::get('task/destroy/{id?}','Frontend\TaskController@destroy')->name('task.destroy');
// Route::get('task/complete/{id?}','Frontend\TaskController@complete')->name('task.complete');
// Route::get('task/recomplete/{id?}','Frontend\TaskController@reComplete')->name('task.reComplete');



// Route::get('task/show/{id?}','Frontend\TaskController@show');


//-------------------------------------HW LESSION 6-----------------------
// Route::post('task','Frontend\TaskController@store')->name('task.store');
// Route::get('task/create','Frontend\TaskController@create')->name('task.create');
// Route::get('task','Frontend\TaskController@index')->name('task.index');
// Route::get('task/destroy/{id?}','Frontend\TaskController@destroy')->name('task.destroy');
// Route::get('task/show/{id?}','Frontend\TaskController@show')->name('task.show');
// Route::get('task/edit/{id?}', 'Frontend\TaskController@edit')->name('task.edit');
// Route::match(['put','patch'], 'task/{task}', 'Frontend\TaskController@update')->name('task.update');

// Route::get('task/complete/{id?}','Frontend\TaskController@complete')->name('task.complete');
// Route::get('task/recomplete/{id?}','Frontend\TaskController@reComplete')->name('task.reComplete');

//---------------------------------HW LESSION 7 + 8-------------------------------------

Route::get('dashboard','Backend\DashboardController@index')->name('backend.dashboard');

Route::get('products','Backend\ProductController@index')->name('backend.product.index');
Route::get('products/create','Backend\ProductController@create')->name('backend.product.create');

Route::get('users','Backend\UserController@index')->name('backend.user.index');
Route::get('users/create','Backend\UserController@create')->name('backend.user.create');



Route::get('/','Frontend\HomeController@index')->name('frontend.index');






