<html>
    <head>
        <title>indogo remit get_province_district</title>
        <meta charset='utf-8' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
    </head>
    <body>
        <form action="{{ $url }}" method="post" enctype="multipart/form-data" >
            <h3>indogo remit get_province_district </h3>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    token
                </span>
                <input type="text" name="token" class="col-xs-8" value="d817b457faa541af9feef769c1827bc7" />
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    mode
                </span>
                <input type="text" name="mode" class="col-xs-8" value="json" />
            </p>
            <button class="col-xs-2">submit</button>
        </form>
    </body>
</html>
