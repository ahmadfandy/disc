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

Route::get('/home', function () {
    return view('home', [
        "title" => "Dashboard"
    ]);
});

// Route::get('/school', function () {
//     return view('school', [
//         "title" => "Create School"
//     ]);
// });

Route::get('/school', 'App\Http\Controllers\School@index')->name('school.index');

Route::get('/school/latest', 'App\Http\Controllers\School@latest')->name('school.latest');

Route::post('/school', 'App\Http\Controllers\School@create_school')->name('school.create');

Route::get('/student', function () {
    return view('student', [
        "title" => "Create Student"
    ]);
});
Route::get('/parent', function () {
    return view('parent', [
        "title" => "Create Parent"
    ]);
});
Route::get('/class', function () {
    return view('class', [
        "title" => "Create Class"
    ]);
});
Route::get('/admin-school', function () {
    return view('admin', [
        "title" => "Create Admin School"
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
