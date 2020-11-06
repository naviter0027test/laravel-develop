<html>
    <head>
        <title>tami-v3 mail borrow</title>
        <meta charset='utf-8' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
    </head>
    <body>
        <form action="{{ $url }}" method="post" enctype="multipart/form-data" >
            <h3>tami-v3 mail borrow</h3>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    companyName
                </span>
                <input type="text" name="companyName" class="col-xs-8" value="Amazon" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    mailTo
                </span>
                <input type="text" name="mailTo" class="col-xs-8" value="naviter0027test@gmail.com" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    mailTitle
                </span>
                <input type="text" name="mailTitle" class="col-xs-8" value="mail title" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    content
                </span>
                <input type="text" name="content" class="col-xs-8" value="" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    contactEditUrl
                </span>
                <input type="text" name="contactEditUrl" class="col-xs-8" value="https://www.google.com" />
            </p>
            <button class="col-xs-2">submit</button>
        </form>
    </body>
</html>
