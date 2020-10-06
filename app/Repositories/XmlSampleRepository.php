<?php

namespace App\Repositories;

use Exception;
use Config;

class XmlSampleRepository
{
    public function ibonToHereProd() {
        return '<SENDDATA>
                <BUSINESS>0700QC1</BUSINESS>
                    <STOREID>A00188</STOREID>
                    <SHOPID>52</SHOPID>
                    <DETAILED_NUM>00050652754620</DETAILED_NUM>
                    <PRODUCT_CODE>07700000000220</PRODUCT_CODE>
                    <STATUS_CODE>0000</STATUS_CODE>
                    <STATUS_DESC>成功</STATUS_DESC>
                    <SUB1>551</SUB1>
                    <SUB2>538</SUB2>
                    <SUB3>539</SUB3>
                    <KEY1>ART200618GUHJW</KEY1>
                    <KEY2/>
                    <KEY3/>
                    <KEY4/>
                    <KEY5/>
                </SENDDATA>
            ';
    }

    public function ibonToHere() {
        return '<SENDDATA>
                <BUSINESS>0700QC1</BUSINESS>
                    <STOREID>A00188</STOREID>
                    <SHOPID>52</SHOPID>
                    <DETAILED_NUM>00050652754620</DETAILED_NUM>
                    <PRODUCT_CODE>07700000000220</PRODUCT_CODE>
                    <STATUS_CODE>0000</STATUS_CODE>
                    <STATUS_DESC>成功</STATUS_DESC>
                    <SUB1>551</SUB1>
                    <SUB2>538</SUB2>
                    <SUB3>539</SUB3>
                    <KEY1>ART200512MYNGM</KEY1>
                    <KEY2/>
                    <KEY3/>
                    <KEY4/>
                    <KEY5/>
                </SENDDATA>
            ';
    }

    public function ibonToHereCloseProd() {
        return "<PAYMONEY>
    <SENDTIME>0</SENDTIME>
    <STOREID>A00015</STOREID>
    <SHOPID>BD</SHOPID>
    <DETAIL_NUM>000616BD443821</DETAIL_NUM>
    <STATUS_CODE>0000</STATUS_CODE>
    <STATUS_DESC>成功</STATUS_DESC>
    <BARCODE1>0906165E6</BARCODE1>
    <BARCODE2>000616BD44382101</BARCODE2>
    <BARCODE3>671132830000201</BARCODE3>
    <AMOUNT>201</AMOUNT>
    <PAYDATE>20200616112349</PAYDATE>
    <USERDATA1>0020200616000013</USERDATA1>
    <USERDATA2/>
    <USERDATA3/>
    <USERDATA4/>
    <USERDATA5/>
</PAYMONEY>";
    }

    public function ibonToHereClose() {
        return '
        <PAYMONEY>
            <SENDTIME>0</SENDTIME>
            <STOREID>206547</STOREID>
            <SHOPID>52</SHOPID>
            <DETAIL_NUM>00051352755236</DETAIL_NUM>
            <STATUS_CODE>0000</STATUS_CODE>
            <STATUS_DESC>成功</STATUS_DESC>
            <BARCODE1>090513555</BARCODE1>
            <BARCODE2>0005135275523601</BARCODE2>
            <BARCODE3>2Y1900050000250</BARCODE3>
            <AMOUNT>250</AMOUNT>
            <PAYDATE>20200513160413</PAYDATE>
            <USERDATA1>0020200518000003</USERDATA1>
            <USERDATA2/>
            <USERDATA3/>
            <USERDATA4/>
            <USERDATA5/>
        </PAYMONEY>
        ';
    }

    public function famiToHereCloseProd() {
        return '<OLTP>
                    <AP>
                        <STATUS>S</STATUS>
                        <ORDER_NO>20200906000004</ORDER_NO>
                        <PIN_CODE>MRT200906XKXJB</PIN_CODE>
                        <DESC></DESC>
                        <STORE_DESC>system</STORE_DESC>
                    </AP>
            </OLTP>
        ';
    }

    public function okToHereProd() {
        return '<SENDDATA>
                    <MMK_ID>0700QC1</MMK_ID>
                    <STOREID>A00188</STOREID>
                    <SHOPID>52</SHOPID>
                    <DETAILED_NUM>00050652754620</DETAILED_NUM>
                    <PRODUCT_CODE>07700000000220</PRODUCT_CODE>
                    <STATUS_CODE>0000</STATUS_CODE>
                    <TEN_CODE>xxx</TEN_CODE>
                    <TRAN_NO>xxx</TRAN_NO>
                    <SUB1>551</SUB1>
                    <SUB2>538</SUB2>
                    <SUB3>539</SUB3>
                    <LISTDATA>
                        <DATA_1>ART200630MYXGF</DATA_1>
                    </LISTDATA>
                </SENDDATA>
            ';
    }

    public function okToHere() {
        return '<SENDDATA>
                    <MMK_ID>0700QC1</MMK_ID>
                    <STOREID>A00188</STOREID>
                    <SHOPID>52</SHOPID>
                    <DETAILED_NUM>00050652754620</DETAILED_NUM>
                    <PRODUCT_CODE>07700000000220</PRODUCT_CODE>
                    <STATUS_CODE>0000</STATUS_CODE>
                    <TEN_CODE>xxx</TEN_CODE>
                    <TRAN_NO>xxx</TRAN_NO>
                    <SUB1>551</SUB1>
                    <SUB2>538</SUB2>
                    <SUB3>539</SUB3>
                    <LISTDATA>
                        <DATA_1>ART200511QZDAW</DATA_1>
                    </LISTDATA>
                </SENDDATA>
            ';
    }

    public function okBarcodeQueryToHere() {
        return '<CHECKDATA>
            <MMK_ID>GF4</MMK_ID>
<TEN_CODE>1234</TEN_CODE>
<TRAN_NO>10110300001</TRAN_NO>
<PAY_AMT>20</PAY_AMT>
<BARCODE_1>20200521ART</BARCODE_1>
<BARCODE_2>2020052100000900</BARCODE_2>
<BARCODE_3>1412AX230000250</BARCODE_3>
<DATA_1>OKmart</DATA_1> 
<DATA_2></DATA_2>
<DATA_3></DATA_3>
<DATA_4></DATA_4>
<DATA_5></DATA_5>
<DATA_6></DATA_6>
<DATA_7></DATA_7>
<DATA_8></DATA_8>
</CHECKDATA>';
    }

    public function okToHereCloseProd($params) {
        return '<CONFIRMDATA><MMK_ID>GFP</MMK_ID><TEN_CODE>0110</TEN_CODE><TRAN_NO>20090307339</TRAN_NO>
            <STATUS_CODE>0000</STATUS_CODE>
            <STATUS_DESC></STATUS_DESC><LISTDATA><DATA_1>'. $params['payment_info']. '</DATA_1><DATA_2>'. $params['money']. '</DATA_2>
            <DATA_3>EVATEST0613</DATA_3><DATA_4>20200910</DATA_4><DATA_5>054138</DATA_5><DATA_6></DATA_6><DATA_7></DATA_7>
            <DATA_8></DATA_8></LISTDATA></CONFIRMDATA>
            ';
    }

    public function hilifeCloseProd($params) {
        return '<OLTP><HEADER><VER>1.0</VER><FROM>CS0HL11111</FROM><TERMINO>202010050000000000000000T0950000000000000100000000000000000000000000000000000000000000170578153024</TERMINO><TO>FETC001001</TO><BUSINESS>0020102</BUSINESS><DATE>20201005</DATE><TIME>153024</TIME><STATCODE>0000</STATCODE><STATDESC></STATDESC></HEADER><AP><TotalCount>1</TotalCount><TotalAmount>'. $params['AMOUNT']. '</TotalAmount><AP_Common></AP_Common><AP_PaymentMethod>PAY</AP_PaymentMethod><Detail><SequenceNo>0000</SequenceNo><OL_OI_NO>ME8</OL_OI_NO><Status>S</Status><Description></Description><OL_Code_1>'. $params['olCode1']. '</OL_Code_1><OL_Code_2>'. $params['olCode2']. '</OL_Code_2><OL_Code_3>'. $params['olCode3']. '</OL_Code_3></Detail></AP></OLTP>';
    }
}
