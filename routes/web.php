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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Route::get('/', 'MaterialController@index');

//Route::get('/materials/{material}', 'MaterialsController@show');

Route::get('/{material_name}/faculties', 'FacultyController@index');


Route::get('/faculties/{faculty}', 'FacultyController@show');


// Route::get('/faculties/{faculty_id}', 'DepartmentController@show');


Route::get('/{faculty_abbreviation}/{department_name}/courses/', 'CourseController@index');



// Route::get('/posts/{post}','PostsController@show');

// Route::get('/posts/create', 'PostsController@create');

// Route::post('/posts', 'PostsController@store');



Route::get('/about', function (){
  return view('layouts.about');

});
