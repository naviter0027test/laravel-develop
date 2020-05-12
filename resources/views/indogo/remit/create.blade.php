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
                <input type="text" name="token" class="col-xs-8" value="d817b457faa541af9feef769c1827bc7" />
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
                <input type="text" name="kurs_lm_time" class="col-xs-8" value="2020/05/12 14:26:17" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    service_charge
                </span>
                <input type="text" name="service_charge" class="col-xs-8" value="200" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    total_payment
                </span>
                <input type="text" name="total_payment" class="col-xs-8" value="300" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    transfer_idr
                </span>
                <input type="text" name="transfer_idr" class="col-xs-8" value="46400" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    recipient_id
                </span>
                <input type="text" name="recipient_id" class="col-xs-8" value="1" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    use_remit_point
                </span>
                <input type="text" name="use_remit_point" class="col-xs-8" value="1" />
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
                    pin_code_mode(1:ART, 2:MRT, 3:ERT)
                </span>
                <input type="text" name="pin_code_mode" class="col-xs-8" value="1" />
            </p>
            <button class="col-xs-2">submit</button>
        </form>
    </body>
</html>
