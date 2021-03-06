<html>
    <head>
        <title>admin login</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/admin/login.css' rel='stylesheet' />
    </head>
    <body>
        <form name="loginPage" action="login" method="post" class="col-xs-6">
            <h3>範例專案-後台登入</h3>
            {{ csrf_field() }}
            <input type="text" name="user" class="col-xs-12" placeholder="使用輸入"/>
            <input type="password" name="pass" class="col-xs-12" placeholder="密碼輸入"/>
            <button class="col-xs-12">登入</button>
        </form>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src='/lib/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src="/lib/underscore.js"></script>
    <script src="/lib/backbone.js"></script>
</html>
