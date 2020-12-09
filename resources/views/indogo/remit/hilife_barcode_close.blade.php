<html>
    <head>
        <title>indogo remit hilife barcode close</title>
        <meta charset='utf-8' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
    </head>
    <body>
        <form action="{{ $url }}" method="post">
            {{ csrf_field() }}
            <h3>indogo remit hilife barcode close</h3>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    olCode1
                </span>
                <input type="text" name="olCode1" class="col-xs-8" value="" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    olCode2
                </span>
                <input type="text" name="olCode2" class="col-xs-8" value="" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    olCode3
                </span>
                <input type="text" name="olCode3" class="col-xs-8" value="" />
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
