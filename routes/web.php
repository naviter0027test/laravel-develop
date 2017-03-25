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
    $lang = session()->get('lang');
    App::setLocale($lang);
    $newses = App\News::orderBy('updated_at', 'desc')->take(5)->get();
    return view('index', ['newses' => $newses]);
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

Route::get('/forget', function () {
    return view('memberForget');
});

Route::group(['prefix' => 'member'], function() {
    Route::get('verifyResult', 'MemberControl@verifyResult');
    Route::get('verifyPage', 'MemberControl@verifyPage');
    Route::get('addSuccess', 'MemberControl@addSuccess');
    Route::post('login', 'MemberControl@login');
    Route::get('logout', 'MemberControl@logout');
    Route::get('verifyEmail/{id}/{md5Verify}', 'MemberControl@verifyEmail');
});
Route::resource('member', 'MemberControl');

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

Route::group(['middleware' => ['checkage']], function() {
    Route::get('/age/{age}', function($age) {
        return "age show:$age";
    });//->middleware('checkage');
});

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

Route::get('/contact', 'ContactControl@show');
Route::post('/contactAdd', 'ContactControl@store');

Route::get('/chooseLan', function() {
    $lang = session()->get('lang');
    App::setLocale($lang);
    return view("language");
});
Route::get('/lan/{lang}', function($lang) {
    session()->put('lang', $lang);
    session()->flash('alert-success', '設定成功');
    return redirect("/chooseLan");
});

Route::resource('onepage', 'pageControl');
Route::resource('news', 'NewsControl');

Route::group(['prefix' => 'admin'], function() {
    Route::post('login', "AdminControl@login");
    Route::get('logout', "AdminControl@logout");
    Route::get('loginPage', "AdminControl@loginPage");

    Route::group(['middleware' => ['adminlogin']], function() {
        Route::get('/', function() {
            return view("adm.dashboard");
        });
        Route::get('dashboard', function() {
            return view("adm.dashboard");
        });

        Route::resource('news', 'AdmNewsControl');
        Route::resource('page', 'AdmPageControl');
        Route::resource('member', 'AdmMemberControl');
    });
});

//雖然沒有顯示錯誤，但不知道是否有去ChechAge.php檢查
Route::group(['before' => 'checkage'], function() {
    Route::get('/beforeUse/{age}', function($age) {
        return "use before". $age;
    });
});

Route::get('/sessionFirst', function() {
    session()->push('aaa', 'abc1234');
    return "session save aaa";
});

Route::get('/sessionGet', function() {
    return session()->all();
});

Route::get('/sessionForget', function() {
    session()->forget('aaa');
    session()->flush();
    return "";
});

Route::get("/mailTest", function() {
    Mail::send('emailTest', [], function($message) {
        $message->from('sender@test0051.axcell28.idv.tw', "System");
        $message->to("zlw78733@rcasd.com", "啟平")->subject("Hello");
    });
});
