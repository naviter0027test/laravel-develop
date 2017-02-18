<html>
    <head>
        <title>admin</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/admin/header.css' rel='stylesheet' />
        <link href='/css/admin/dashboard-left.css' rel='stylesheet' />
        <link href='/css/admin/dashboard.css' rel='stylesheet' />
    </head>
    <body>
        @include('adm.header')
        @include('adm.dashboard-left')
        <span class="breadcrumbs col-xs-9">
            會員建立
        </span>
        <div class="col-xs-9">
            <form action="/index.php/admin/member" method="post" class="memEdit col-xs-12">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <span class="col-xs-12 col-sm-3">E-mail</span>
                <input type="text" name="email" class="col-xs-12 col-sm-9"/>
                <span class="col-xs-12 col-sm-3">密碼</span>
                <input type="password" name="pass" class="col-xs-12 col-sm-9" />
                <span class="col-xs-12 col-sm-3">姓名</span>
                <input type="text" name="name" class="col-xs-12 col-sm-9" />
                <span class="col-xs-12 col-sm-3">手機</span>
                <input type="text" name="phone" class="col-xs-12 col-sm-9"/>
                <span class="col-xs-12 col-sm-3">電話</span>
                <input type="text" name="tel" class="col-xs-12 col-sm-9" />
                <span class="col-xs-12 col-sm-3">地址</span>
                <input type="text" name="address" class="col-xs-12 col-sm-9" />
                <button class="col-xs-2">確定</button>
            </form>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src='/lib/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src="/lib/underscore.js"></script>
    <script src="/lib/backbone.js"></script>
</html>

