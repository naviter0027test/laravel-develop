<html>
    <head>
        <title>indogo remit share_member_check</title>
        <meta charset='utf-8' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
    </head>
    <body>
        <form action="{{ $url }}" method="post" enctype="multipart/form-data" >
            <h3>indogo remit share_member_check</h3>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    share_member_id
                </span>
                <input type="text" name="share_member_id" class="col-xs-8" />
            </p>
            <button class="col-xs-2">submit</button>
        </form>
    </body>
</html>
