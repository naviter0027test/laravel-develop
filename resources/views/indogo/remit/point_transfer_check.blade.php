<html>
    <head>
        <title>indogo remit point transfer check</title>
        <meta charset='utf-8' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
    </head>
    <body>
        <form action="{{ $url }}" method="post">
            <h3>indogo remit point transfer check</h3>
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
                    phone
                </span>
                <input type="text" name="phone" class="col-xs-8" value="" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    mode [1:查詢本系統的帳號(有的情況下會有列表) 2:查詢購物系統是否有該帳號(手機號是唯一值)]
                </span>
                <input type="text" name="mode" class="col-xs-8" value="1" />
            </p>
            <button class="col-xs-2">submit</button>
        </form>
    </body>
</html>
