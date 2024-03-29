<html>
    <head>
        <title>indogo remit register</title>
        <meta charset='utf-8' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
    </head>
    <body>
        <form action="{{ $url }}" method="post" enctype="multipart/form-data" >
            <h3>indogo remit register</h3>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    name
                </span>
                <input type="text" name="name" class="col-xs-8" value="Bob" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    phone
                </span>
                <input type="text" name="phone" class="col-xs-8" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    arc_no
                </span>
                <input type="text" name="arc_no" class="col-xs-8" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    password
                </span>
                <input type="password" name="password" class="col-xs-8" value="8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    app_share_id
                </span>
                <input type="text" name="app_share_id" class="col-xs-8" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    share_member_id
                </span>
                <input type="text" name="share_member_id" class="col-xs-8" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    arc_expire_date
                </span>
                <input type="date" name="arc_expire_date" class="col-xs-8" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    birthday
                </span>
                <input type="date" name="birthday" class="col-xs-8" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    arc
                </span>
                <input type="file" name="arc" class="col-xs-8" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    arc_back
                </span>
                <input type="file" name="arc_back" class="col-xs-8" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    sign
                </span>
                <input type="file" name="sign" class="col-xs-8" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    address
                </span>
                <input type="file" name="address" class="col-xs-8" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    id_card
                </span>
                <input type="file" name="id_card" class="col-xs-8" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    self
                </span>
                <input type="file" name="self" class="col-xs-8" />
            </p>
            <button class="col-xs-2">submit</button>
        </form>
    </body>
</html>
