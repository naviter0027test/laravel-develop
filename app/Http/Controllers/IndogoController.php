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
        return view('indogo.remit.create', ['url' => $url]);
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
        $url = 'http://dev.indogo.link/app/remit/check_token.php';
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

    public function remitRegister(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/register.php';
        return view('indogo.remit.register', ['url' => $url]);
    }

    public function remitRegisterTest(Request $request) {
        $params = $request->all();
        $url = 'http://prod.indogo.link/app/remit/register.php';
        return view('indogo.remit.register', ['url' => $url]);
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

    public function remitAddRecipientV2(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/add_recipient_v2.php';
        return view('indogo.remit.add_recipient_v2', ['url' => $url]);
    }

    public function remitPhotos(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/app_photos.php';
        return view('indogo.remit.app_photos', ['url' => $url]);
    }

    public function remitCheckMemberExists(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/check_mem_exists.php';
        return view('indogo.remit.check_mem_exists', ['url' => $url]);
    }

    public function remitForgetSms(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/password_forget_sms.php';
        return view('indogo.remit.password_forget_sms', ['url' => $url]);
    }

    public function remitPasswordUpdate(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/password_update.php';
        return view('indogo.remit.password_update', ['url' => $url]);
    }

    public function remitDocGet(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/doc_get.php';
        return view('indogo.remit.doc_get', ['url' => $url]);
    }

    public function remitPhoneTokenSet(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/phone_token_set.php';
        return view('indogo.remit.phone_token_set', ['url' => $url]);
    }

    public function remitPhoneTokenDel(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/phone_token_del.php';
        return view('indogo.remit.phone_token_del', ['url' => $url]);
    }

    public function remitBankListTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/bank_list.php';
        return view('indogo.remit.bank_list', ['url' => $url]);
    }

    public function remitMemberRecipientsTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/member_recipients.php';
        return view('indogo.remit.member_recipients', ['url' => $url]);
    }

    public function remitOrderCheckTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/order_check.php';
        return view('indogo.remit.order_check', ['url' => $url]);
    }

    public function remitNotifyRecordTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/notification_record.php';
        return view('indogo.remit.notification_record', ['url' => $url]);
    }

    public function remitNotifyReadTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/notification_read.php';
        return view('indogo.remit.notification_read', ['url' => $url]);
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

    public function hilifeQueryTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/hilife/query.php';
        $xmlSampleRepository = new XmlSampleRepository();
        //$xml = $xmlSampleRepository->hilifeToHere();
        $postData = [
            'SHOP_ID' => 'xxx',
            'TRANS_NO' => 'xxx',
            'MMK_ID' => 'xxx',
            'ORDER_NO' => 'ART200511QZDAW',
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

    public function pointTransferTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/point_transfer.php';
        return view('indogo.remit.point_transfer', ['url' => $url]);
    }

    public function remitIbonBarcodeTest(Request $request) {
        $params = $request->all();
        $url = 'http://dev.indogo.link/app/remit/ibon_barcode.php';
        return view('indogo.remit.ibon_barcode', ['url' => $url]);
    }
}

