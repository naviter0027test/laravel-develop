<html>
    <head>
        <title>tami-v4 api contact</title>
        <meta charset='utf-8' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
    </head>
    <body>
        <form action="{{ $url }}" method="post" enctype="multipart/form-data" >
            <h3>tami-v4 api contact</h3>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    name
                </span>
                <input type="text" name="name" class="col-xs-8" value="" />
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
                    productId
                </span>
                <input type="text" name="productId" class="col-xs-8" value="3" />
            </p>
            <p class="col-xs-12">
                <span class="col-xs-3">
                    <label class="glyphicon glyphicon-pencil"></label>
                    companyId
                </span>
                <input type="text" name="companyId" class="col-xs-8" value="5" />
            </p>
            <button class="col-xs-2">submit</button>
        </form>
    </body>
</html>
