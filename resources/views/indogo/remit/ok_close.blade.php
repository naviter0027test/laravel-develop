<html>
    <head>
        <title>indogo remit ok close</title>
        <meta charset='utf-8' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
    </head>
    <body>
        <form action="{{ $url }}" method="get">
            {{ csrf_field() }}
            <h3>indogo remit ok close</h3>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    payment_info
                </span>
                <input type="text" name="payment_info" class="col-xs-8" value="" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    money
                </span>
                <input type="text" name="money" class="col-xs-8" value="" />
            </p>
            <button class="col-xs-2">submit</button>
        </form>
    </body>
</html>
