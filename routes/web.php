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
Route::get('/tipe-soal', function () {
    return view('tipe_soal', [
        "title" => "Tipe Soal"
    ]);
});
Route::get('/soal', function () {
    return view('soal', [
        "title" => "Create Soal"
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
Route::get('/jawaban', function () {
    return view('jawaban', [
        "title" => "Jawaban"
    ]);
});
Route::get('/tsoalheader', function () {
    return view('tsoalheader', [
        "title" => "TSoalHeader"
    ]);
});
Route::get('/mdspmformula', function () {
    return view('mdspmformula', [
        "title" => "MDSPMFORMULA"
    ]);
});
Route::get('/credit', function () {
    return view('credit', [
        "title" => "Credit"
    ]);
});
Route::get('/tcredit', function () {
    return view('tcredit', [
        "title" => "Tcredit"
    ]);
});
Route::get('/tsoal', function () {
    return view('tsoal', [
        "title" => "Tsoal"
    ]);
});

Route::get('/users/List_Users', 'App\Http\Controllers\List_Users@index')->name('list_users.index');
