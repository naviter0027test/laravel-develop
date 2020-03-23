<html>
    <head>
        <title>indogo remit add_recipient_v2</title>
        <meta charset='utf-8' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
    </head>
    <body>
        <form action="{{ $url }}" method="post" enctype="multipart/form-data" >
            <h3>indogo remit add_recipient_v2</h3>
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
                    bank_code
                </span>
                <input type="text" name="bank_code" class="col-xs-8" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    bank_acc
                </span>
                <input type="text" name="bank_acc" class="col-xs-8" />
            </p>
            <button class="col-xs-2">submit</button>
        </form>
    </body>
</html>
