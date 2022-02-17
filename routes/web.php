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

/*

Route::get("/indogo/remit/update/idcard", "IndogoController@remitUpdateIdCard");
Route::get("/indogo/remit/update/idcard-test", "IndogoController@remitUpdateIdCardTest");
Route::get("/indogo/remit/update/idcard-vi", "IndogoController@remitUpdateIdCardVi");
Route::get("/indogo/remit/update/arc", "IndogoController@remitUpdateArc");
Route::get("/indogo/remit/update/arc-test", "IndogoController@remitUpdateArcTest");
Route::get("/indogo/remit/update/arc-vi", "IndogoController@remitUpdateArcVi");
Route::get("/indogo/remit/family-test", "IndogoController@remitFamilyTest");
Route::get("/indogo/remit/app-photos", "IndogoController@remitPhotos");
Route::get("/indogo/remit/app-photos-test", "IndogoController@remitPhotosTest");
Route::get("/indogo/remit/app-photos-vi", "IndogoController@remitPhotosVi");
Route::get("/indogo/remit/check-member-test", "IndogoController@remitCheckMemberExistsTest");
Route::get("/indogo/remit/phone-token-set-test", "IndogoController@remitPhoneTokenSetTest");
Route::get("/indogo/remit/phone-token-del-test", "IndogoController@remitPhoneTokenDelTest");
Route::get("/indogo/remit/phone-token-set-vi", "IndogoController@remitPhoneTokenSetVi");
Route::get("/indogo/remit/phone-token-del-vi", "IndogoController@remitPhoneTokenDelVi");
Route::get("/indogo/remit/notify-record", "IndogoController@remitNotifyRecord");
Route::get("/indogo/remit/notify-record-test", "IndogoController@remitNotifyRecordTest");
Route::get("/indogo/remit/notify-read", "IndogoController@remitNotifyRead");
Route::get("/indogo/remit/notify-read-test", "IndogoController@remitNotifyReadTest");
Route::get("/indogo/remit/notify-read-vi", "IndogoController@remitNotifyReadVi");

Route::get("/indogo/ibon/query", "IndogoController@ibonQuery");
Route::get("/indogo/ibon/close", "IndogoController@ibonClosePage");
Route::post("/indogo/ibon/close", "IndogoController@ibonClose");
Route::get("/indogo/ibon/close-test", "IndogoController@ibonCloseTestPage");
Route::post("/indogo/ibon/close-test", "IndogoController@ibonCloseTest");
Route::get("/indogo/ibon/query-test", "IndogoController@ibonQueryTestPage");
Route::post("/indogo/ibon/query-test", "IndogoController@ibonQueryTest");
Route::get("/indogo/ibon/query-vi", "IndogoController@ibonQueryViPage");
Route::post("/indogo/ibon/query-vi", "IndogoController@ibonQueryVi");
Route::get("/indogo/ibon/query-vi-test", "IndogoController@ibonQueryViPageTest");
Route::post("/indogo/ibon/query-vi-test", "IndogoController@ibonQueryViTest");
Route::get("/indogo/ibon/close-vi-test", "IndogoController@ibonCloseViTestPage");
Route::post("/indogo/ibon/close-vi-test", "IndogoController@ibonCloseViTest");
Route::get("/indogo/ibon/close-vi", "IndogoController@ibonCloseViPage");
Route::post("/indogo/ibon/close-vi", "IndogoController@ibonCloseVi");

Route::get("/indogo/fami/close", "IndogoController@famiClosePage");
Route::post("/indogo/fami/close", "IndogoController@famiClose");
Route::get("/indogo/fami/close-test", "IndogoController@famiCloseTestPage");
Route::post("/indogo/fami/close-test", "IndogoController@famiCloseTest");
Route::get("/indogo/fami/close-vi", "IndogoController@famiCloseViPage");
Route::post("/indogo/fami/close-vi", "IndogoController@famiCloseVi");

Route::get("/indogo/okmart/query", "IndogoController@okmartQueryPage");
Route::post("/indogo/okmart/query", "IndogoController@okmartQuery");
Route::get("/indogo/okmart/query-test", "IndogoController@okmartQueryTestPage");
Route::post("/indogo/okmart/query-test", "IndogoController@okmartQueryTest");
Route::get("/indogo/okmart/barcode-query-vi", "IndogoController@okmartBarcodeQueryViPage");
Route::post("/indogo/okmart/barcode-query-vi", "IndogoController@okmartBarcodeQueryVi");
Route::get("/indogo/okmart/barcode-query-test", "IndogoController@okBarcodeQueryTest");
Route::get("/indogo/okmart/barcode-query", "IndogoController@okBarcodeQuery");
Route::get("/indogo/okmart/close-test-page", "IndogoController@okmartCloseTestPage");
Route::get("/indogo/okmart/close-test", "IndogoController@okmartCloseTest");
Route::get("/indogo/okmart/close-page", "IndogoController@okmartClosePage");
Route::get("/indogo/okmart/close", "IndogoController@okmartClose");

Route::get("/indogo/hilife/query-test", "IndogoController@hilifeQueryTestPage");
Route::post("/indogo/hilife/query-test", "IndogoController@hilifeQueryTest");
Route::get("/indogo/hilife/query", "IndogoController@hilifeQueryPage");
Route::post("/indogo/hilife/query", "IndogoController@hilifeQuery");
Route::get("/indogo/hilife/close", "IndogoController@hilifeClosePage");
Route::post("/indogo/hilife/close", "IndogoController@hilifeClose");
Route::get("/indogo/hilife/barcode-close-test", "IndogoController@hilifeBarcodeCloseTestPage");
Route::post("/indogo/hilife/barcode-close-test", "IndogoController@hilifeBarcodeCloseTest");
Route::get("/indogo/hilife/barcode-close", "IndogoController@hilifeBarcodeClosePage");
Route::post("/indogo/hilife/barcode-close", "IndogoController@hilifeBarcodeClose");

Route::get("/indogo/remit/point-history", "IndogoController@pointHistory");
Route::get("/indogo/remit/point-history-test", "IndogoController@pointHistoryTest");
Route::get("/indogo/remit/point-transfer-check", "IndogoController@pointTransferCheck");
Route::get("/indogo/remit/point-transfer-check-test", "IndogoController@pointTransferCheckTest");
Route::get("/indogo/remit/point-transfer-check-vi", "IndogoController@pointTransferCheckVi");
Route::get("/indogo/remit/point-transfer", "IndogoController@pointTransfer");
Route::get("/indogo/remit/point-transfer-test", "IndogoController@pointTransferTest");
Route::get("/indogo/remit/point-transfer-vi", "IndogoController@pointTransferVi");
Route::get("/indogo/remit/point-transfer-vi-test", "IndogoController@pointTransferViTest");

Route::get("/indogo/remit/app-photos", "IndogoController@remitAppPhotos");
Route::get("/indogo/remit/app-get-declaration-info-test", "IndogoController@remitAppDeclarationInfoTest");
Route::get("/indogo/remit/notification-test", "IndogoController@remitNotificationTest");
 */
Route::group(['prefix' => 'indogo'], function() {
    /*
    Route::get("remit/register-step-1", "IndogoController@remitRegisterStep1");
    Route::get("remit/register-step-2", "IndogoController@remitRegisterStep2");
    Route::get("remit/register-step-1-test", "IndogoController@remitRegisterStep1Test");
    Route::get("remit/register-step-2-test", "IndogoController@remitRegisterStep2Test");
    Route::get("remit/register-step-1-vi", "IndogoController@remitRegisterStep1Vi");
    Route::get("remit/register-step-2-vi", "IndogoController@remitRegisterStep2Vi");
    Route::get("remit/register-step-1-vi-test", "IndogoController@remitRegisterStep1ViTest");
    Route::get("remit/register-step-2-vi-test", "IndogoController@remitRegisterStep2ViTest");
    Route::get("remit/register", "IndogoController@remitRegister");
    Route::get("remit/register-test", "IndogoController@remitRegisterTest");
    Route::get("remit/register-vi", "IndogoController@remitRegisterVi");
    Route::get("remit/request-sms-code", "IndogoController@remitRequestSmsCode");
    Route::get("remit/request-sms-code-test", "IndogoController@remitRequestSmsCodeTest");
    Route::get("remit/request-sms-code-vi", "IndogoController@remitRequestSmsCodeVi");
    Route::get("remit/request-sms-code-vi-test", "IndogoController@remitRequestSmsCodeViTest");
    Route::get("remit/verify-sms-code", "IndogoController@remitVerifySmsCode");
    Route::get("remit/verify-sms-code-test", "IndogoController@remitVerifySmsCodeTest");
    Route::get("remit/verify-sms-code-vi", "IndogoController@remitVerifySmsCodeVi");
    Route::get("remit/verify-sms-code-vi-test", "IndogoController@remitVerifySmsCodeViTest");
    Route::get("remit/forget-sms", "IndogoController@remitForgetSms");
    Route::get("remit/forget-sms-test", "IndogoController@remitForgetSmsTest");
    Route::get("remit/password-update", "IndogoController@remitPasswordUpdate");
    Route::get("remit/password-update-test", "IndogoController@remitPasswordUpdateTest");
    Route::get("remit/forget-sms-vi", "IndogoController@remitForgetSmsVi");
    Route::get("remit/password-update-vi", "IndogoController@remitPasswordUpdateVi");

    Route::get("remit/login", "IndogoController@remitLogin");
    Route::get("remit/login-test", "IndogoController@remitLoginTest");
    Route::get("remit/login-vi", "IndogoController@remitLoginVi");
    Route::get("remit/login-vi-test", "IndogoController@remitLoginViTest");
    Route::get("remit/check/token", "IndogoController@checkToken");
    Route::get("remit/check/token-test", "IndogoController@checkTokenTest");
    Route::get("remit/check/token-vi-test", "IndogoController@checkTokenViTest");
    Route::get("remit/check/token-vi", "IndogoController@checkTokenVi");

    Route::get("remit/doc-get", "IndogoController@remitDocGet");
    Route::get("remit/doc-get-test", "IndogoController@remitDocGetTest");
    Route::get("remit/doc-get-vi", "IndogoController@remitDocGetVi");
    Route::get("remit/doc-get-vi-test", "IndogoController@remitDocGetViTest");
    Route::get("remit/bank-list-test", "IndogoController@remitBankListTest");
    Route::get("remit/bank-list-vi", "IndogoController@remitBankListVi");
    Route::get("remit/bank-list-vi-test", "IndogoController@remitBankListViTest");
    Route::get("remit/member-recipients", "IndogoController@remitMemberRecipients");
    Route::get("remit/member-recipients-test", "IndogoController@remitMemberRecipientsTest");
    Route::get("remit/member-recipients-vi", "IndogoController@remitMemberRecipientsVi");
    Route::get("remit/member-recipients-vi-test", "IndogoController@remitMemberRecipientsViTest");
    Route::get("remit/search-recipients-vi", "IndogoController@remitSearchRecipientsVi");
    Route::get("remit/search-recipients-vi-test", "IndogoController@remitSearchRecipientsViTest");
    Route::get("remit/search-recipients-ids-vi", "IndogoController@remitSearchRecipientsIdsVi");

    Route::get("remit/add-recipient-v2", "IndogoController@remitAddRecipientV2");
    Route::get("remit/add-recipient-v2-test", "IndogoController@remitAddRecipientV2Test");
    Route::get("remit/add-recipient-v2-prodtw", "IndogoController@remitAddRecipientV2ProdTw");
    Route::get("remit/add-recipient-v2-vi", "IndogoController@remitAddRecipientV2Vi");
    Route::get("remit/add-recipient-v2-vi-test", "IndogoController@remitAddRecipientV2ViTest");
    Route::get("remit/check-recipient-v2-vi", "IndogoController@remitCheckRecipientV2Vi");
    Route::get("remit/add-recipient-v2-update-vi", "IndogoController@remitAddRecipientV2UpdateVi");
    Route::get("remit/add-recipient-v2-update-vi-test", "IndogoController@remitAddRecipientV2UpdateViTest");
    Route::get("remit/hide-recipient", "IndogoController@remitHideRecipient");
    Route::get("remit/hide-recipient-test", "IndogoController@remitHideRecipientTest");
    Route::get("remit/hide-recipient-vi", "IndogoController@remitHideRecipientVi");
    Route::get("remit/hide-recipient-vi-test", "IndogoController@remitHideRecipientViTest");

    Route::get("remit/create", "IndogoController@remitCreate");
    Route::get("remit/create-test", "IndogoController@remitCreateTest");
    Route::get("remit/create-vi", "IndogoController@remitCreateVi");
    Route::get("remit/create-vi-test", "IndogoController@remitCreateViTest");
    Route::get("remit/ibon-barcode", "IndogoController@remitIbonBarcode");
    Route::get("remit/ibon-barcode-test", "IndogoController@remitIbonBarcodeTest");
    Route::get("remit/ibon-barcode-vi", "IndogoController@remitIbonBarcodeVi");
    Route::get("remit/ibon-barcode-vi-test", "IndogoController@remitIbonBarcodeViTest");
    Route::get("remit/fami-barcode", "IndogoController@remitFamiBarcode");
    Route::get("remit/fami-barcode-test", "IndogoController@remitFamiBarcodeTest");
    Route::get("remit/fami-barcode-vi", "IndogoController@remitFamiBarcodeVi");
    Route::get("remit/ok-barcode-test", "IndogoController@remitOkBarcodeTest");
    Route::get("remit/ok-barcode", "IndogoController@remitOkBarcode");
    Route::get("remit/ok-barcode-vi", "IndogoController@remitOkBarcodeVi");
    Route::get("remit/hilife-barcode", "IndogoController@remitHilifeBarcode");
    Route::get("remit/hilife-barcode-test", "IndogoController@remitHilifeBarcodeTest");
    Route::get("remit/hilife-barcode-vi", "IndogoController@remitHilifeBarcodeVi");
    Route::get("remit/order-check", "IndogoController@remitOrderCheck");
    Route::get("remit/order-check-test", "IndogoController@remitOrderCheckTest");
    Route::get("remit/order-check-vi", "IndogoController@remitOrderCheckVi");
    Route::get("remit/orders-check", "IndogoController@remitOrdersCheck");
    Route::get("remit/orders-check-test", "IndogoController@remitOrdersCheckTest");
    Route::get("remit/orders-check-vi", "IndogoController@remitOrdersCheckVi");
    Route::get("remit/money-transfer-history", "IndogoController@moneyTransferHistory");
    Route::get("remit/money-transfer-history-test", "IndogoController@moneyTransferHistoryTest");
    Route::get("remit/money-transfer-history-vi", "IndogoController@moneyTransferHistoryVi");
    Route::get("remit/money-transfer-history-vi-test", "IndogoController@moneyTransferHistoryViTest");
    Route::get("remit/get-province-district-vi", "IndogoController@remitGetProvinceDistrictVi");
    Route::get("remit/get-province-district-vi-test", "IndogoController@remitGetProvinceDistrictViTest");
    Route::get("remit/app-share-sms", "IndogoController@remitAppShareSms");
    Route::get("remit/app-share-sms-test", "IndogoController@remitAppShareSmsTest");
    Route::get("remit/app-share-sms-vi", "IndogoController@remitAppShareSmsVi");
    Route::get("remit/app-share-sms-vi-test", "IndogoController@remitAppShareSmsViTest");
    Route::get("remit/share-member-check-vi", "IndogoController@remitShareMemberCheckVi");
     */
    Route::get("remit/update-phone-sms-test", "IndogoController@remitUpdatePhoneSmsTest");
    Route::get("remit/update-phone-sms", "IndogoController@remitUpdatePhoneSms");
    Route::get("remit/update-phone-test", "IndogoController@remitUpdatePhoneTest");
    Route::get("remit/update-phone", "IndogoController@remitUpdatePhone");
    Route::get("remit/relationships-test", "IndogoController@remitRelationshipsTest");
    Route::get("remit/relationships", "IndogoController@remitRelationships");
    Route::get("remit/purposes-test", "IndogoController@remitPurposesTest");
    Route::get("remit/purposes", "IndogoController@remitPurposes");
});

Route::get("/tami-v2/api/contact", "TamiV4Controller@contactV2");
Route::get("/tami-v4/api/contact", "TamiV4Controller@contact");
Route::get("/tami-v3/borrow/mail", "TamiV4Controller@mailBorrow");

Route::get("/skype/first", "SkypeController@first");
Route::get("/skype/second2ndToJoyce", "SkypeController@second");
Route::get("/skype/second2ndToLanker", "SkypeController@secondToLanker");

Route::get("/facebook/webhook", "FacebookController@webhook");
Route::get("/facebook/test", "FacebookController@sendData");
Route::get("/facebook/privacy", "FacebookController@privacy");
Route::get("/facebook/messenger", "FacebookController@messenger");

Route::get("/hrs/diary/index", "HrsController@diaryIndex");
Route::get("/hrs/attendance/checkin", "HrsController@attendanceCheckIn");
Route::get("/hrs/curl/https-test", "HrsController@curlHttpsTest");
