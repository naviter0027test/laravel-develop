<html>
    <head>
        <title>indogo remit add_recipient_v2_update_vi</title>
        <meta charset='utf-8' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
    </head>
    <body>
        <form action="{{ $url }}" method="post" enctype="multipart/form-data" >
            <h3>indogo remit add_recipient_v2_update_vi</h3>
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
                    recipient_type(1: 銀行轉帳, 2:櫃台, 3:送到家)
                </span>
                <input type="text" name="recipient_type" value="1" class="col-xs-8" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    recipient_name
                </span>
                <input type="text" name="recipient_name" class="col-xs-8" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    id_card_no
                </span>
                <input type="text" name="id_card_no" class="col-xs-8" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    phone_no
                </span>
                <input type="text" name="phone_no" class="col-xs-8" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    relationship
                </span>
                <select name="relationship">
                    <option value="family">family</option>
                    <option value="friend">friend</option>
                    <option value="self">self</option>
                    <option value="others">others</option>
                </select>
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    address
                </span>
                <input type="text" name="address" class="col-xs-8" />
            </p>
            <button class="col-xs-2">submit</button>
        </form>
    </body>
</html>
