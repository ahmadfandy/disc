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

Route::get('/tipe-soal', 'App\Http\Controllers\Tipe_soal@index')->name('tipe-soal.index');
Route::post('/tipe-soal', 'App\Http\Controllers\Tipe_soal@create')->name('tipe-soal.create');

Route::get('/soal', 'App\Http\Controllers\Soal@index')->name('soal.index');
Route::post('/soal', 'App\Http\Controllers\Soal@create')->name('soal.create');

Route::get('/jawaban', 'App\Http\Controllers\Jawaban@index')->name('jawaban.index');
Route::post('/jawaban', 'App\Http\Controllers\Jawaban@create')->name('jawaban.create');


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
Route::get('/user', function () {
    return view('user', [
        "title" => "User Setting"
    ]);
});
Route::get('/menu-group', function () {
    return view('menu_group', [
        "title" => "Menu Group"
    ]);
});
Route::get('/level', function () {
    return view('level', [
        "title" => "Level User"
    ]);
});


Route::get('/test', function () {
    return view('test', [
        "title" => "Create Test"
    ]);
});
Route::get('/analyze', function () {
    return view('analyze', [
        "title" => "Analyze"
    ]);
});

Route::get('/users/List_Users', 'App\Http\Controllers\List_Users@index')->name('list_users.index');
