<html>
    <head>
        <title>indogo remit hilife close</title>
        <meta charset='utf-8' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
    </head>
    <body>
        <form action="{{ $url }}" method="get">
            <h3>indogo remit hilife close</h3>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    SHOP_ID
                </span>
                <input type="text" name="SHOP_ID" class="col-xs-8" value="" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    TRANS_NO
                </span>
                <input type="text" name="TRANS_NO" class="col-xs-8" value="" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    MMK_ID
                </span>
                <input type="text" name="MMK_ID" class="col-xs-8" value="" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    ORDER_NO
                </span>
                <input type="text" name="ORDER_NO" class="col-xs-8" value="" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    AMOUNT
                </span>
                <input type="text" name="AMOUNT" class="col-xs-8" value="" />
            </p>
            <button class="col-xs-2">submit</button>
        </form>
    </body>
</html>
