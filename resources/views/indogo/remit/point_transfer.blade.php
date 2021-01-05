<html>
    <head>
        <title>indogo remit point transfer</title>
        <meta charset='utf-8' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
    </head>
    <body>
        <form action="{{ $url }}" method="post">
            <h3>indogo remit point transfer</h3>
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
                    friend_id
                </span>
                <input type="text" name="friend_id" class="col-xs-8" value="142736" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    remit_point
                </span>
                <input type="text" name="remit_point" class="col-xs-8" value="20" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    mode [1:系統之間會員的點數轉讓(friend_id 必填) 2:匯款系統轉讓到購物系統(phone 必填)]
                </span>
                <input type="text" name="mode" class="col-xs-8" value="1" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    phone
                </span>
                <input type="text" name="phone" class="col-xs-8" value="" />
            </p>
            <button class="col-xs-2">submit</button>
        </form>
    </body>
</html>
