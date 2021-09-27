<html>
    <head>
        <title>indogo remit create</title>
        <meta charset='utf-8' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
    </head>
    <body>
        <form action="{{ $url }}" method="post">
            <h3>indogo remit create</h3>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    token
                </span>
                <input type="text" name="token" class="col-xs-8" value="7a2f96fd45de4b2bae295cdf4da5bd9c" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    amount_ntd
                </span>
                <input type="text" name="amount_ntd" class="col-xs-8" value="100" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    kurs_lm_time
                </span>
                <input type="text" name="kurs_lm_time" class="col-xs-8" value="2021/07/08 13:50:20" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    service_charge
                </span>
                <input type="text" name="service_charge" class="col-xs-8" value="180" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    total_payment
                </span>
                <input type="text" name="total_payment" class="col-xs-8" value="280" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    transfer_idr
                </span>
                <input type="text" name="transfer_idr" class="col-xs-8" value="82100" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    recipient_id
                </span>
                <input type="text" name="recipient_id" class="col-xs-8" value="3" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    use_remit_point
                </span>
                <input type="text" name="use_remit_point" class="col-xs-8" value="0" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    use_points
                </span>
                <input type="text" name="use_points" class="col-xs-8" value="50" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    pin_code_mode(1:ART, 2:MRT[越南], 3:ERT[菲律賓])
                </span>
                <input type="text" name="pin_code_mode" class="col-xs-8" value="2" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    recipient_type(1:銀行轉帳, 2:櫃台, 3:送到家)
                </span>
                <input type="text" name="recipient_type" class="col-xs-8" value="2" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    currency(VND:越南幣, USD:美金)
                </span>
                <input type="text" name="currency" class="col-xs-8" value="VND" />
            </p>
            <button class="col-xs-2">submit</button>
        </form>
    </body>
</html>
