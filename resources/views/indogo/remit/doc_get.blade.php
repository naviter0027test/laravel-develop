<html>
    <head>
        <title>indogo remit doc get</title>
        <meta charset='utf-8' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
    </head>
    <body>
        <form action="{{ $url }}" method="post">
            <h3>indogo remit doc get</h3>
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
                    doc_name
                </span>
                <input type="text" name="doc_name" class="col-xs-8" value="" />
            </p>
<!--
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    payment_info
                </span>
                <input type="text" name="payment_info" class="col-xs-8" value="" />
            </p>
-->
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
                    transfer_amount_ntd
                </span>
                <input type="text" name="transfer_amount_ntd" class="col-xs-8" value="500" />
            </p>

            <button class="col-xs-2">submit</button>
        </form>
    </body>
</html>
