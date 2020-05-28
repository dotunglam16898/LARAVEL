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
Route::get('/profile', function () {
	
	return view('profile',[
		'name' => 'Đỗ Tùng Lâm',
		'year' => 1998,
		'school' => 'Đại học kinh tế kỹ thuật công nghiệp',
		'home' => 'Hà Nội',
		'info' => 'chả có gì cả',
		'job' => 'Lập trình viên PHP'


	]);
	

});

Route::get('/list', function(){
	return view('list', ['list' => [
		[
			'name' => 'Học View trong Laravel',
			'status' => 0

		], 
		[
			'name' => 'Học Route trong Laravel',
			'status' => 1
		],

		[
			'name' => 'Lam bai tap View trong Laravel',
			'status' => -1

		]

	]]);
});


