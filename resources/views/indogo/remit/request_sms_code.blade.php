<html>
    <head>
        <title>indogo remit request sms</title>
        <meta charset='utf-8' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
    </head>
    <body>
        <form action="{{ $url }}" method="post" enctype="multipart/form-data" >
            <h3>indogo remit request sms code</h3>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    arc_no
                </span>
                <input type="text" name="arc_no" class="col-xs-8" value="" />
            </p>
            <button class="col-xs-2">submit</button>
        </form>
    </body>
</html>
