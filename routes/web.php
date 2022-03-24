<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home', [
        "title" => "Dashboard"
    ]);
});

Route::get('/school', 'App\Http\Controllers\School@index')->name('school.index');
Route::post('/school', 'App\Http\Controllers\School@create_school')->name('school.create');

Route::get('/admin', 'App\Http\Controllers\Admin@index')->name('admin.index');
Route::post('/admin', 'App\Http\Controllers\Admin@create_admin')->name('admin.create');

Route::get('/class', 'App\Http\Controllers\Class_School@index')->name('class.index');
Route::post('/class', 'App\Http\Controllers\Class_School@create_class')->name('class.create');

Route::get('/student', 'App\Http\Controllers\Student@index')->name('student.index');
Route::post('/student', 'App\Http\Controllers\Student@create_student')->name('student.create');

Route::get('/parent', function () {
    return view('parent', [
        "title" => "Create Parent"
    ]);
});

Route::get('/', function () {
    return view('signin', [
        "title" => "Sign in"
    ]);
});
Route::get('/sign-up', function () {
    return view('signup', [
        "title" => "Sign up"
    ]);
});

Route::get('/users/List_Users', 'App\Http\Controllers\List_Users@index')->name('list_users.index');
