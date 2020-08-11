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
    Route::post('sendVerifyEmail', 'MemberControl@sendVerifyEmail');
    Route::get('verifyEmail/{id}/{md5Verify}', 'MemberControl@verifyEmail');
    Route::post('getSMS/{id}', 'MemberControl@sendShortMessage');
    Route::post('verifySMS', 'MemberControl@verifyByMessage');
    Route::get('verifySmsPage/{id}', 'MemberControl@verifySmsPage');
});
Route::resource('member', 'MemberControl');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/soLoad', function() {
    dl("test.so");
    return test_add(5, 5);
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
        Route::resource('contact', 'AdmContactControl');
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

Route::get("/info", function() {
    phpinfo();
});

//mypay test
Route::any("/productChange", function(Request $request) {
    \Log::info(\Input::all());
    return "8888";
});

Route::get("/testRedis", 'PostOne@testRedis');

Route::get("vir-product", function(Request $request) {
    return view('advertising');
});

Route::post("/linepay/start", 'LinePayController@start');
Route::post("/linepay/confirm", 'LinePayController@confirm');

Route::get("/kaileshop/neweb-pay/notify", "KaileshopController@newebPayNotify");

Route::get("/optoma/productModel-series", "OptomaController@productModelSeries");
Route::get("/optoma/permission-by-models-alone", "OptomaController@permissionByModelsAlone");

Route::get("/indogo/remit/create", "IndogoController@remitCreate");
Route::get("/indogo/remit/create-test", "IndogoController@remitCreateTest");
Route::get("/indogo/remit/ibon-barcode", "IndogoController@remitIbonBarcode");
Route::get("/indogo/remit/ibon-barcode-test", "IndogoController@remitIbonBarcodeTest");
Route::get("/indogo/remit/fami-barcode", "IndogoController@remitFamiBarcode");
Route::get("/indogo/remit/fami-barcode-test", "IndogoController@remitFamiBarcodeTest");
Route::get("/indogo/remit/ok-barcode-test", "IndogoController@remitOkBarcodeTest");
Route::get("/indogo/remit/hilife-barcode", "IndogoController@remitHilifeBarcode");
Route::get("/indogo/remit/hilife-barcode-test", "IndogoController@remitHilifeBarcodeTest");

Route::get("/indogo/remit/update/idcard", "IndogoController@remitUpdateIdCard");
Route::get("/indogo/remit/update/idcard-test", "IndogoController@remitUpdateIdCardTest");
Route::get("/indogo/remit/check/token", "IndogoController@checkToken");
Route::get("/indogo/remit/check/token-test", "IndogoController@checkTokenTest");
Route::get("/indogo/remit/update/arc", "IndogoController@remitUpdateArc");
Route::get("/indogo/remit/update/arc-test", "IndogoController@remitUpdateArcTest");
Route::get("/indogo/remit/register", "IndogoController@remitRegister");
Route::get("/indogo/remit/register-test", "IndogoController@remitRegisterTest");
Route::get("/indogo/remit/request-sms-code", "IndogoController@remitRequestSmsCode");
Route::get("/indogo/remit/request-sms-code-test", "IndogoController@remitRequestSmsCodeTest");
Route::get("/indogo/remit/verify-sms-code-test", "IndogoController@remitVerifySmsCodeTest");
Route::get("/indogo/remit/family-test", "IndogoController@remitFamilyTest");
Route::get("/indogo/remit/login", "IndogoController@remitLogin");
Route::get("/indogo/remit/login-test", "IndogoController@remitLoginTest");
Route::get("/indogo/remit/add-recipient-v2", "IndogoController@remitAddRecipientV2");
Route::get("/indogo/remit/add-recipient-v2-test", "IndogoController@remitAddRecipientV2Test");
Route::get("/indogo/remit/hide-recipient", "IndogoController@remitHideRecipient");
Route::get("/indogo/remit/hide-recipient-test", "IndogoController@remitHideRecipientTest");
Route::get("/indogo/remit/app-photos", "IndogoController@remitPhotos");
Route::get("/indogo/remit/app-photos-test", "IndogoController@remitPhotosTest");
Route::get("/indogo/remit/check-member-test", "IndogoController@remitCheckMemberExistsTest");
Route::get("/indogo/remit/forget-sms", "IndogoController@remitForgetSms");
Route::get("/indogo/remit/forget-sms-test", "IndogoController@remitForgetSmsTest");
Route::get("/indogo/remit/password-update-test", "IndogoController@remitPasswordUpdateTest");
Route::get("/indogo/remit/doc-get", "IndogoController@remitDocGet");
Route::get("/indogo/remit/doc-get-test", "IndogoController@remitDocGetTest");
Route::get("/indogo/remit/phone-token-set-test", "IndogoController@remitPhoneTokenSetTest");
Route::get("/indogo/remit/phone-token-del-test", "IndogoController@remitPhoneTokenDelTest");
Route::get("/indogo/remit/bank-list-test", "IndogoController@remitBankListTest");
Route::get("/indogo/remit/member-recipients-test", "IndogoController@remitMemberRecipientsTest");
Route::get("/indogo/remit/order-check", "IndogoController@remitOrderCheck");
Route::get("/indogo/remit/order-check-test", "IndogoController@remitOrderCheckTest");
Route::get("/indogo/remit/orders-check", "IndogoController@remitOrdersCheck");
Route::get("/indogo/remit/orders-check-test", "IndogoController@remitOrdersCheckTest");
Route::get("/indogo/remit/notify-record", "IndogoController@remitNotifyRecord");
Route::get("/indogo/remit/notify-record-test", "IndogoController@remitNotifyRecordTest");
Route::get("/indogo/remit/notify-read", "IndogoController@remitNotifyRead");
Route::get("/indogo/remit/notify-read-test", "IndogoController@remitNotifyReadTest");
Route::get("/indogo/ibon/query", "IndogoController@ibonQuery");
Route::get("/indogo/ibon/close", "IndogoController@ibonClose");
Route::get("/indogo/ibon/query-test", "IndogoController@ibonQueryTest");
Route::get("/indogo/okmart/query", "IndogoController@okmartQuery");
Route::get("/indogo/okmart/query-test", "IndogoController@okmartQueryTest");
Route::get("/indogo/okmart/barcode-query-test", "IndogoController@okBarcodeQueryTest");
Route::get("/indogo/okmart/close", "IndogoController@okmartClose");
Route::get("/indogo/hilife/query-test", "IndogoController@hilifeQueryTest");
Route::get("/indogo/hilife/close-test", "IndogoController@hilifeCloseTest");
Route::get("/indogo/remit/point-history", "IndogoController@pointHistory");
Route::get("/indogo/remit/point-history-test", "IndogoController@pointHistoryTest");
Route::get("/indogo/remit/point-transfer-check", "IndogoController@pointTransferCheck");
Route::get("/indogo/remit/point-transfer-check-test", "IndogoController@pointTransferCheckTest");
Route::get("/indogo/remit/point-transfer", "IndogoController@pointTransfer");
Route::get("/indogo/remit/point-transfer-test", "IndogoController@pointTransferTest");
Route::get("/indogo/remit/money-transfer-history", "IndogoController@moneyTransferHistory");
Route::get("/indogo/remit/money-transfer-history-test", "IndogoController@moneyTransferHistoryTest");

Route::get("/indogo/ibon/close-test", "IndogoController@ibonCloseTest");
Route::get("/indogo/remit/app-photos", "IndogoController@remitAppPhotos");
Route::get("/indogo/remit/app-share-sms", "IndogoController@remitAppShareSms");
Route::get("/indogo/remit/app-share-sms-test", "IndogoController@remitAppShareSmsTest");
Route::get("/indogo/remit/app-get-declaration-info-test", "IndogoController@remitAppDeclarationInfoTest");
Route::get("/indogo/remit/notification-test", "IndogoController@remitNotificationTest");

Route::get("/skype/first", "SkypeController@first");
Route::get("/skype/second2ndToJoyce", "SkypeController@second");
Route::get("/skype/second2ndToLanker", "SkypeController@secondToLanker");
