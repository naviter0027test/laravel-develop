<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Session;
use App\Repositories\XmlSampleRepository;

class IndogoController extends Controller
{
    public function remitCreate(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/create.php';
        return view('indogo.remit.create', ['url' => $url]);
    }

    public function remitCreateTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/create.php';
        return view('indogo.remit.create_test', ['url' => $url]);
    }

    public function remitCreateVi(Request $request) {
        $params = $request->all();
        $url = 'http://govnprod.indogo.link/app/remit/create.php';
        return view('indogo.remit.create_vi', ['url' => $url]);
    }

    public function remitCreateViTest(Request $request) {
        $params = $request->all();
        $url = 'http://govndev.indogo.link/app/remit/create.php';
        return view('indogo.remit.create_vi', ['url' => $url]);
    }

    public function remitUpdateIdCard(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/update_id_card.php';
        return view('indogo.remit.update_id_card', ['url' => $url]);
    }

    public function remitUpdateIdCardTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/update_id_card.php';
        return view('indogo.remit.update_id_card', ['url' => $url]);
    }

    public function checkToken(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/check_token.php';
        return view('indogo.remit.check_token', ['url' => $url]);
    }

    public function checkTokenTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/check_token.php';
        return view('indogo.remit.check_token', ['url' => $url]);
    }

    public function checkTokenViTest(Request $request) {
        $params = $request->all();
        $url = 'http://govndev.indogo.link/app/remit/check_token.php';
        return view('indogo.remit.check_token', ['url' => $url]);
    }

    public function checkTokenVi(Request $request) {
        $params = $request->all();
        $url = 'http://govnprod.indogo.link/app/remit/check_token.php';
        return view('indogo.remit.check_token', ['url' => $url]);
    }

    public function remitUpdateArc(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/update_arc.php';
        return view('indogo.remit.update_arc', ['url' => $url]);
    }

    public function remitUpdateArcTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link//app/remit/update_arc.php';
        return view('indogo.remit.update_arc', ['url' => $url]);
    }

    public function remitRegisterStep1Test(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/register_step_1.php';
        return view('indogo.remit.register_step1', ['url' => $url]);
    }

    public function remitRegisterStep2Test(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/register_step_2.php';
        return view('indogo.remit.register_step2', ['url' => $url]);
    }

    public function remitRegisterStep1(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/register_step_1.php';
        return view('indogo.remit.register_step1', ['url' => $url]);
    }

    public function remitRegisterStep2(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/register_step_2.php';
        return view('indogo.remit.register_step2', ['url' => $url]);
    }

    public function remitRegisterStep1Vi(Request $request) {
        $params = $request->all();
        $url = 'http://govnprod.indogo.link/app/remit/register_step_1.php';
        return view('indogo.remit.register_step1', ['url' => $url]);
    }

    public function remitRegisterStep2Vi(Request $request) {
        $params = $request->all();
        $url = 'http://govnprod.indogo.link/app/remit/register_step_2.php';
        return view('indogo.remit.register_step2', ['url' => $url]);
    }

    public function remitRegisterStep1ViTest(Request $request) {
        $params = $request->all();
        $url = 'http://govndev.indogo.link/app/remit/register_step_1.php';
        return view('indogo.remit.register_step1', ['url' => $url]);
    }

    public function remitRegisterStep2ViTest(Request $request) {
        $params = $request->all();
        $url = 'http://govndev.indogo.link/app/remit/register_step_2.php';
        return view('indogo.remit.register_step2', ['url' => $url]);
    }

    public function remitRegister(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/register.php';
        return view('indogo.remit.register', ['url' => $url]);
    }

    public function remitRegisterTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/register.php';
        return view('indogo.remit.register', ['url' => $url]);
    }

    public function remitRegisterVi(Request $request) {
        $params = $request->all();
        $url = 'http://govnprod.indogo.link/app/remit/register.php';
        return view('indogo.remit.register', ['url' => $url]);
    }

    public function remitRequestSmsCode(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/request_sms_code.php';
        return view('indogo.remit.request_sms_code', ['url' => $url]);
    }

    public function remitRequestSmsCodeTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/request_sms_code.php';
        return view('indogo.remit.request_sms_code', ['url' => $url]);
    }

    public function remitVerifySmsCode(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/verify_sms_code.php';
        return view('indogo.remit.verify_sms_code', ['url' => $url]);
    }

    public function remitVerifySmsCodeTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/verify_sms_code.php';
        return view('indogo.remit.verify_sms_code', ['url' => $url]);
    }

    public function remitVerifySmsCodeVi(Request $request) {
        $params = $request->all();
        $url = 'http://govnprod.indogo.link/app/remit/verify_sms_code.php';
        return view('indogo.remit.verify_sms_code', ['url' => $url]);
    }

    public function remitVerifySmsCodeViTest(Request $request) {
        $params = $request->all();
        $url = 'http://govndev.indogo.link/app/remit/verify_sms_code.php';
        return view('indogo.remit.verify_sms_code', ['url' => $url]);
    }

    public function remitFamilyTest(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/mart-test/family.php';
        return view('indogo.remit.family', ['url' => $url]);
    }

    public function remitLogin(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/login.php';
        return view('indogo.remit.login', ['url' => $url]);
    }

    public function remitLoginTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/login.php';
        return view('indogo.remit.login', ['url' => $url]);
    }

    public function remitLoginVi(Request $request) {
        $params = $request->all();
        $url = 'http://govnprod.indogo.link/app/remit/login.php';
        return view('indogo.remit.login', ['url' => $url]);
    }

    public function remitLoginViTest(Request $request) {
        $params = $request->all();
        $url = 'http://govndev.indogo.link/app/remit/login.php';
        return view('indogo.remit.login', ['url' => $url]);
    }

    public function remitAddRecipientV2(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/add_recipient_v2.php';
        return view('indogo.remit.add_recipient_v2', ['url' => $url]);
    }

    public function remitAddRecipientV2Test(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/add_recipient_v2.php';
        return view('indogo.remit.add_recipient_v2', ['url' => $url]);
    }

    public function remitAddRecipientV2ProdTw(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.tw/app/remit/add_recipient_v2.php';
        return view('indogo.remit.add_recipient_v2', ['url' => $url]);
    }

    public function remitAddRecipientV2Vi(Request $request) {
        $params = $request->all();
        $url = 'http://govnprod.indogo.link/app/remit/add_recipient_v2.php';
        return view('indogo.remit.add_recipient_v2_vi', ['url' => $url]);
    }

    public function remitAddRecipientV2ViTest(Request $request) {
        $params = $request->all();
        $url = 'http://govndev.indogo.link/app/remit/add_recipient_v2.php';
        return view('indogo.remit.add_recipient_v2_vi', ['url' => $url]);
    }

    public function remitSearchRecipientsVi(Request $request) {
        $params = $request->all();
        $url = 'http://govnprod.indogo.link/app/remit/search_recipient.php';
        return view('indogo.remit.search_recipients', ['url' => $url]);
    }

    public function remitSearchRecipientsViTest(Request $request) {
        $params = $request->all();
        $url = 'http://govndev.indogo.link/app/remit/search_recipient.php';
        return view('indogo.remit.search_recipients', ['url' => $url]);
    }

    public function remitAddRecipientV2UpdateVi(Request $request) {
        $params = $request->all();
        $url = 'http://govnprod.indogo.link/app/remit/add_recipient_v2_update.php';
        return view('indogo.remit.add_recipient_v3_vi', ['url' => $url]);
    }

    public function remitAddRecipientV2UpdateViTest(Request $request) {
        $params = $request->all();
        $url = 'http://govndev.indogo.link/app/remit/add_recipient_v2_update.php';
        return view('indogo.remit.add_recipient_v3_vi', ['url' => $url]);
    }

    public function remitGetProvinceDistrictVi(Request $request) {
        $params = $request->all();
        $url = 'http://govnprod.indogo.link/app/remit/get_province_district.php';
        return view('indogo.remit.get_province_district', ['url' => $url]);
    }

    public function remitGetProvinceDistrictViTest(Request $request) {
        $params = $request->all();
        $url = 'http://govndev.indogo.link/app/remit/get_province_district.php';
        return view('indogo.remit.get_province_district', ['url' => $url]);
    }

    public function remitHideRecipient(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/hide_recipient.php';
        return view('indogo.remit.hide_recipient', ['url' => $url]);
    }

    public function remitHideRecipientTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/hide_recipient.php';
        return view('indogo.remit.hide_recipient', ['url' => $url]);
    }

    public function remitPhotos(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/app_photos.php';
        return view('indogo.remit.app_photos', ['url' => $url]);
    }

    public function remitPhotosTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/app_photos.php';
        return view('indogo.remit.app_photos', ['url' => $url]);
    }

    public function remitPhotosVi(Request $request) {
        $params = $request->all();
        $url = 'http://govnprod.indogo.link/app/remit/app_photos.php';
        return view('indogo.remit.app_photos', ['url' => $url]);
    }

    public function remitCheckMemberExistsTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/check_mem_exists.php';
        return view('indogo.remit.check_mem_exists', ['url' => $url]);
    }

    public function remitForgetSms(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/password_forget_sms.php';
        return view('indogo.remit.password_forget_sms', ['url' => $url]);
    }

    public function remitForgetSmsTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/password_forget_sms.php';
        return view('indogo.remit.password_forget_sms', ['url' => $url]);
    }

    public function remitPasswordUpdate(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/password_update.php';
        return view('indogo.remit.password_update', ['url' => $url]);
    }

    public function remitPasswordUpdateTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/password_update.php';
        return view('indogo.remit.password_update', ['url' => $url]);
    }

    public function remitDocGet(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/doc_get.php';
        return view('indogo.remit.doc_get', ['url' => $url]);
    }

    public function remitDocGetTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/doc_get.php';
        return view('indogo.remit.doc_get', ['url' => $url]);
    }

    public function remitDocGetVi(Request $request) {
        $params = $request->all();
        $url = 'http://govnprod.indogo.link/app/remit/doc_get.php';
        return view('indogo.remit.doc_get', ['url' => $url]);
    }

    public function remitDocGetViTest(Request $request) {
        $params = $request->all();
        $url = 'http://govndev.indogo.link/app/remit/doc_get.php';
        return view('indogo.remit.doc_get', ['url' => $url]);
    }

    public function remitPhoneTokenSetTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/phone_token_set.php';
        return view('indogo.remit.phone_token_set', ['url' => $url]);
    }

    public function remitPhoneTokenDelTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/phone_token_del.php';
        return view('indogo.remit.phone_token_del', ['url' => $url]);
    }

    public function remitBankListTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/bank_list.php';
        return view('indogo.remit.bank_list', ['url' => $url]);
    }

    public function remitBankListVi(Request $request) {
        $params = $request->all();
        $url = 'http://govnprod.indogo.link/app/remit/bank_list.php';
        return view('indogo.remit.bank_list', ['url' => $url]);
    }

    public function remitBankListViTest(Request $request) {
        $params = $request->all();
        $url = 'http://govndev.indogo.link/app/remit/bank_list.php';
        return view('indogo.remit.bank_list', ['url' => $url]);
    }

    public function remitMemberRecipients(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/member_recipients.php';
        return view('indogo.remit.member_recipients', ['url' => $url]);
    }

    public function remitMemberRecipientsTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/member_recipients.php';
        return view('indogo.remit.member_recipients', ['url' => $url]);
    }

    public function remitMemberRecipientsVi(Request $request) {
        $params = $request->all();
        $url = 'http://govnprod.indogo.link/app/remit/member_recipients.php';
        return view('indogo.remit.member_recipients', ['url' => $url]);
    }

    public function remitMemberRecipientsViTest(Request $request) {
        $params = $request->all();
        $url = 'http://govndev.indogo.link/app/remit/member_recipients.php';
        return view('indogo.remit.member_recipients', ['url' => $url]);
    }

    public function remitOrderCheck(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/order_check.php';
        return view('indogo.remit.order_check', ['url' => $url]);
    }

    public function remitOrderCheckTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/order_check.php';
        return view('indogo.remit.order_check', ['url' => $url]);
    }

    public function remitOrderCheckVi(Request $request) {
        $params = $request->all();
        $url = 'http://govnprod.indogo.link/app/remit/order_check.php';
        return view('indogo.remit.order_check', ['url' => $url]);
    }

    public function remitOrdersCheck(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/orders_check.php';
        return view('indogo.remit.orders_check', ['url' => $url]);
    }

    public function remitOrdersCheckTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/orders_check.php';
        return view('indogo.remit.orders_check', ['url' => $url]);
    }

    public function remitNotifyRecord(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/notification_record.php';
        return view('indogo.remit.notification_record', ['url' => $url]);
    }

    public function remitNotifyRecordTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/notification_record.php';
        return view('indogo.remit.notification_record', ['url' => $url]);
    }

    public function remitNotifyRead(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/notification_read.php';
        return view('indogo.remit.notification_read', ['url' => $url]);
    }

    public function remitNotifyReadTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/notification_read.php';
        return view('indogo.remit.notification_read', ['url' => $url]);
    }

    public function ibonQuery(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/ibon/query.php';
        $xmlSampleRepository = new XmlSampleRepository();
        $xml = $xmlSampleRepository->ibonToHereProd();
        $postData = [
            'XMLData' => $xml,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function ibonClosePage(Request $request) {
        $params = $request->all();
        $url = 'http://laravel.axcell28.idv.tw/indogo/ibon/close';
        return view('indogo.remit.ibon_close', ['url' => $url]);
    }

    public function ibonClose(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/ibon/close.php';
        $xmlSampleRepository = new XmlSampleRepository();
        $xml = $xmlSampleRepository->ibonToHereClose($params['txn_id'], $params['total']);
        $postData = [
            'XMLData' => $xml,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function ibonCloseViTestPage(Request $request) {
        $params = $request->all();
        $url = 'http://laravel.axcell28.idv.tw/indogo/ibon/close-vi-test';
        return view('indogo.remit.ibon_close', ['url' => $url]);
    }

    public function ibonCloseViTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/ibon/close.php';
        $xmlSampleRepository = new XmlSampleRepository();
        $xml = $xmlSampleRepository->ibonToHereClose($params['txn_id'], $params['total']);
        $postData = [
            'XMLData' => $xml,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function ibonCloseViPage(Request $request) {
        $params = $request->all();
        $url = 'http://laravel.axcell28.idv.tw/indogo/ibon/close-vi';
        return view('indogo.remit.ibon_close', ['url' => $url]);
    }

    public function ibonCloseVi(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/ibon/close.php';
        $xmlSampleRepository = new XmlSampleRepository();
        $xml = $xmlSampleRepository->ibonToHereClose($params['txn_id'], $params['total']);
        $postData = [
            'XMLData' => $xml,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function ibonQueryTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/ibon/query.php';
        $xmlSampleRepository = new XmlSampleRepository();
        $xml = $xmlSampleRepository->ibonToHere();
        $postData = [
            'XMLData' => $xml,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function famiCloseTestPage(Request $request) {
        $params = $request->all();
        $url = 'http://laravel.axcell28.idv.tw/indogo/fami/close-test';
        return view('indogo.remit.fami_close', ['url' => $url]);
    }

    public function famiCloseTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/fami/close.php';
        $xmlSampleRepository = new XmlSampleRepository();
        $xml = $xmlSampleRepository->famiToHereCloseProd($params['txn_id'], $params['payment_info']);
        $postData = [
            'd' => $xml,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function famiClosePage(Request $request) {
        $params = $request->all();
        $url = 'http://laravel.axcell28.idv.tw/indogo/fami/close';
        return view('indogo.remit.fami_close', ['url' => $url]);
    }

    public function famiClose(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/fami/close.php';
        $xmlSampleRepository = new XmlSampleRepository();
        $xml = $xmlSampleRepository->famiToHereCloseProd($params['txn_id'], $params['payment_info']);
        $postData = [
            'd' => $xml,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function famiCloseViPage(Request $request) {
        $params = $request->all();
        $url = 'http://laravel.axcell28.idv.tw/indogo/fami/close-vi';
        return view('indogo.remit.fami_close', ['url' => $url]);
    }

    public function famiCloseVi(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/fami/close.php';
        $xmlSampleRepository = new XmlSampleRepository();
        $xml = $xmlSampleRepository->famiToHereCloseProd($params['txn_id'], $params['payment_info']);
        $postData = [
            'd' => $xml,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function okmartQuery(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/okmart/query.php';
        $xmlSampleRepository = new XmlSampleRepository();
        $xml = $xmlSampleRepository->okToHereProd();
        $postData = [
            'XMLData' => $xml,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function okmartQueryTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/okmart/query.php';
        $xmlSampleRepository = new XmlSampleRepository();
        $xml = $xmlSampleRepository->okToHere();
        $postData = [
            'XMLData' => $xml,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function okmartBarcodeQueryViPage(Request $request) {
        $params = $request->all();
        $url = 'http://laravel.axcell28.idv.tw/indogo/okmart/barcode-query-vi';
        return view('indogo.ok.barcode_query', ['url' => $url]);
    }

    public function okmartBarcodeQueryVi(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/okmart/barcode_query.php';
        $xmlSampleRepository = new XmlSampleRepository();
        $xml = $xmlSampleRepository->okBarcodeQueryToHere($params['barcode1'], $params['barcode2'], $params['barcode3']);
        $postData = [
            'XMLData' => $xml,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function okmartClosePage(Request $request) {
        $params = $request->all();
        $url = '/indogo/okmart/close';
        return view('indogo.remit.ok_close', ['url' => $url]);
    }

    public function okmartClose(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/okmart/close.php';
        $xmlSampleRepository = new XmlSampleRepository();
        $xml = $xmlSampleRepository->okToHereCloseProd($params);
        $postData = [
            'XMLData' => $xml,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function hilifeQueryTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/hilife/query.php';
        $xmlSampleRepository = new XmlSampleRepository();
        //$xml = $xmlSampleRepository->hilifeToHere();
        $postData = [
            'SHOP_ID' => 'T095',
            'TRANS_NO' => '05LA2231',
            'ORDER_NO' => 'MRT200522QGJVF',
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url. "?". http_build_query($postData));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function hilifeQueryPage(Request $request) {
        $url = '/indogo/hilife/query';
        return view('indogo.remit.hilife_query', ['url' => $url]);
    }

    public function hilifeQuery(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/hilife/query.php';
        $xmlSampleRepository = new XmlSampleRepository();
        //$xml = $xmlSampleRepository->hilifeToHere();
        $postData = [
            'SHOP_ID' => $params['shop_id'],
            'TRANS_NO' => $params['trans_no'],
            'ORDER_NO' => $params['order_no'],
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url. "?". http_build_query($postData));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function hilifeClosePage(Request $request) {
        $url = '/indogo/hilife/close';
        return view('indogo.remit.hilife_close', ['url' => $url]);
    }

    public function hilifeClose(Request $request) {
        $params = $request->all();
        $params['shop_id'] = $params['shop_id'] != '' ? $params['shop_id'] : 'T095';
        $params['trans_no'] = $params['trans_no'] != '' ? $params['trans_no'] : '05LA2231';
        $params['order_no'] = $params['order_no'] != '' ? $params['order_no'] : '';
        $params['AMOUNT'] = $params['AMOUNT'] != '' ? $params['AMOUNT'] : '300';

        $url = 'http://prod.indogo.link/hilife/close.php';
        $postData = [
            'SHOP_ID' => $params['shop_id'],
            'TRANS_NO' => $params['trans_no'],
            'ORDER_NO' => $params['order_no'],
            'AMOUNT' => $params['AMOUNT'],
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url. "?". http_build_query($postData));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function hilifeBarcodeClosePage(Request $request) {
        $url = '/indogo/hilife/barcode-close';
        return view('indogo.remit.hilife_barcode_close', ['url' => $url]);
    }

    public function hilifeBarcodeClose(Request $request) {
        $params = $request->all();
        $params['olCode1'] = $params['olCode1'] != '' ? $params['olCode1'] : '090731ME8';
        $params['olCode2'] = $params['olCode2'] != '' ? $params['olCode2'] : '2020073100000400';
        $params['olCode3'] = $params['olCode3'] != '' ? $params['olCode3'] : '073153000000250';
        $params['AMOUNT'] = $params['AMOUNT'] != '' ? $params['AMOUNT'] : '250';
        $url = 'http://prod.indogo.link/hilife/barcode_close.php';
        $xmlSampleRepository = new XmlSampleRepository();
        $xml = $xmlSampleRepository->hilifeCloseProd($params);
        $postData = $xml;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function pointHistory(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/point_history.php';
        return view('indogo.remit.point_history', ['url' => $url]);
    }

    public function pointHistoryTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/point_history.php';
        return view('indogo.remit.point_history', ['url' => $url]);
    }

    public function pointTransferCheck(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/point_transfer_check.php';
        return view('indogo.remit.point_transfer_check', ['url' => $url]);
    }

    public function pointTransferCheckTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/point_transfer_check.php';
        return view('indogo.remit.point_transfer_check', ['url' => $url]);
    }

    public function pointTransfer(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/point_transfer.php';
        return view('indogo.remit.point_transfer', ['url' => $url]);
    }

    public function pointTransferTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/point_transfer.php';
        return view('indogo.remit.point_transfer', ['url' => $url]);
    }

    public function pointTransferViTest(Request $request) {
        $params = $request->all();
        $url = 'http://govndev.indogo.link/app/remit/point_transfer.php';
        return view('indogo.remit.point_transfer', ['url' => $url]);
    }

    public function remitIbonBarcode(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/ibon_barcode.php';
        return view('indogo.remit.ibon_barcode', ['url' => $url]);
    }

    public function remitIbonBarcodeTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/ibon_barcode.php';
        return view('indogo.remit.ibon_barcode', ['url' => $url]);
    }

    public function remitIbonBarcodeVi(Request $request) {
        $params = $request->all();
        $url = 'http://govnprod.indogo.link/app/remit/ibon_barcode.php';
        return view('indogo.remit.ibon_barcode', ['url' => $url]);
    }

    public function remitIbonBarcodeViTest(Request $request) {
        $params = $request->all();
        $url = 'http://govndev.indogo.link/app/remit/ibon_barcode.php';
        return view('indogo.remit.ibon_barcode', ['url' => $url]);
    }

    public function remitFamiBarcode(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/fami_barcode.php';
        return view('indogo.remit.fami_barcode', ['url' => $url]);
    }

    public function remitFamiBarcodeTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/fami_barcode.php';
        return view('indogo.remit.fami_barcode', ['url' => $url]);
    }

    public function remitFamiBarcodeVi(Request $request) {
        $params = $request->all();
        $url = 'http://govnprod.indogo.link/app/remit/fami_barcode.php';
        return view('indogo.remit.fami_barcode', ['url' => $url]);
    }

    public function remitOkBarcodeTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/ok_barcode.php';
        return view('indogo.remit.ok_barcode', ['url' => $url]);
    }

    public function remitOkBarcode(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/ok_barcode.php';
        return view('indogo.remit.ok_barcode', ['url' => $url]);
    }

    public function remitOkBarcodeVi(Request $request) {
        $params = $request->all();
        $url = 'http://govnprod.indogo.link/app/remit/ok_barcode.php';
        return view('indogo.remit.ok_barcode', ['url' => $url]);
    }

    public function remitHilifeBarcode(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/hilife_barcode.php';
        return view('indogo.remit.hilife_barcode', ['url' => $url]);
    }

    public function remitHilifeBarcodeTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/hilife_barcode.php';
        return view('indogo.remit.hilife_barcode', ['url' => $url]);
    }

    public function remitHilifeBarcodeVi(Request $request) {
        $params = $request->all();
        $url = 'http://govnprod.indogo.link/app/remit/hilife_barcode.php';
        return view('indogo.remit.hilife_barcode', ['url' => $url]);
    }

    public function moneyTransferHistory(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/money_transfer_history.php';
        return view('indogo.remit.money_transfer_history', ['url' => $url]);
    }

    public function moneyTransferHistoryTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/money_transfer_history.php';
        return view('indogo.remit.money_transfer_history', ['url' => $url]);
    }

    public function moneyTransferHistoryVi(Request $request) {
        $params = $request->all();
        $url = 'http://govnprod.indogo.link/app/remit/money_transfer_history.php';
        return view('indogo.remit.money_transfer_history', ['url' => $url]);
    }

    public function moneyTransferHistoryViTest(Request $request) {
        $params = $request->all();
        $url = 'http://govndev.indogo.link/app/remit/money_transfer_history.php';
        return view('indogo.remit.money_transfer_history', ['url' => $url]);
    }

    public function ibonCloseTestPage(Request $request) {
        $params = $request->all();
        $url = 'http://laravel.axcell28.idv.tw/indogo/ibon/close-test';
        return view('indogo.remit.ibon_close', ['url' => $url]);
    }

    public function ibonCloseTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/ibon/close.php';
        $xmlSampleRepository = new XmlSampleRepository();
        $xml = $xmlSampleRepository->ibonToHereClose($params['txn_id'], $params['total']);
        $postData = [
            'XMLData' => $xml,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function okBarcodeQueryTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/okmart/barcode_query.php';
        $xmlSampleRepository = new XmlSampleRepository();
        $xml = $xmlSampleRepository->okBarcodeQueryToHere();
        $postData = [
            'XMLData' => $xml,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        
        $response = curl_exec($ch);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $response;
    }

    public function remitAppPhotos(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/app_photos.php';
        return view('indogo.remit.app_photos', ['url' => $url]);
    }

    public function remitAppShareSms(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/app_share_sms.php';
        return view('indogo.remit.app_share_sms', ['url' => $url]);
    }

    public function remitAppShareSmsTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/app_share_sms.php';
        return view('indogo.remit.app_share_sms', ['url' => $url]);
    }

    public function remitAppDeclarationInfoTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/declaration_info.php';
        return view('indogo.remit.app_declaration_info', ['url' => $url]);
    }

    public function remitNotificationTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/notification.php';
        return view('indogo.remit.notification', ['url' => $url]);
    }
}

