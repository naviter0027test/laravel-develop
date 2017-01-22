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

Route::get('/foo', function() {
    return "test";
});

Route::get('/test', function() {
    return "a apple";
});

Route::get('/user/{id}', function($id) {
    return 'User:'. $id;
});

Route::get('/userTest/{id}', function($id) {
    return 'UserTest:'. $id;
})->where('id', '[0-9]+');

Route::get('/abc/profile', function() {
    return 'show profile';
})->name('profile');

Route::get('/show', function() {
    return view('test', ['aaa' => 'TESTABC']);
});

Route::get('/adm.login', function() {
    return view("adm.login");
});

Route::get('/age/{age}', function($age) {
    return "age show:$age";
})->middleware('checkage');

Route::get('/overAge', function() {
    return 'over age';
});

Route::resource('autobind', 'PostOne');

Route::get("/formTest", function() {
    return view("test.form");
});

Route::post("/postFirst", 'PostOne@show');

Route::get("/uploadTest", function() {
    return view("test.upload");
});

Route::post("/postFirst/upload", 'PostOne@store');

Route::get("/putForm", function() {
    return view("test.putForm");
});
