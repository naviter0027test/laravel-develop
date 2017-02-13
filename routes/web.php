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
    return view('index');
});

Route::get('/newsList/{nowPage}', function ($nowPage) {
    return view('newsList');
});

Route::get('/newsother/{newsId}', function ($newsId) {
    return view('news');
});

Route::get('/page/{pageId}', function ($pageId) {
    return view('page');
});

Route::get('/memberLogin', function () {
    return view('memberLogin');
});

Route::get('/forget', function () {
    return view('memberForget');
});

Route::get('/register', function () {
    return view('memberRegister');
});

Route::get('/welcome', function () {
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

Route::get("/dbuse", 'PostOne@dbuse');
Route::get('/dbuse2/{username}', 'PostOne@dbuse2');
Route::get('/dbuse3', 'PostOne@dbuse3');
Route::get('/dbuse4', 'PostOne@dbuse4');
Route::get('/dbuse5', function() {
    $rmbs = App\Rmb::where('money', '>', 300)->get();
    return json_encode($rmbs);
});

Route::resource('rmb', 'RmbControl');
Route::post('/rmb/mutiupdate', 'RmbControl@mutiUpdate');
Route::put('/rmb/update', 'RmbControl@update');
Route::get('/rmbform', function() {
    return view("rmb.store");
});
Route::get('/rmbupdate', function() {
    return view("rmb.update");
});
Route::get('/rmbMutiUpdate', function() {
    return view("rmb.mutiUpdate");
});

Route::resource('onepage', 'pageControl');
Route::resource('news', 'NewsControl');

Route::group(['prefix' => 'admin'], function() {
    Route::get('loginPage', function() {
        return view("adm.login");
    });
});
