<html>
    <head>
        <title>admin contact show</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/admin/header.css' rel='stylesheet' />
        <link href='/css/admin/dashboard-left.css' rel='stylesheet' />
        <link href='/css/admin/dashboard.css' rel='stylesheet' />
        <link href='/css/admin/contact.css' rel='stylesheet' />
    </head>
    <body>
        @include('adm.header')
        @include('adm.dashboard-left')
        <span class="breadcrumbs col-xs-9">
            聯絡內容
        </span>
        <div class="col-xs-9">
            <p class="col-xs-12">
                <label class="col-xs-2">姓名</label>
                <span class="col-xs-10">{{$name}}</span>
            </p>
            <p class="col-xs-12">
                <label class="col-xs-2">手機</label>
                <span class="col-xs-10">{{$phone}}</span>
            </p>
            <p class="col-xs-12">
                <label class="col-xs-2">E-mail</label>
                <span class="col-xs-10">{{$email}}</span>
            </p>
            <p class="col-xs-12">
                <label class="col-xs-2">公司名稱</label>
                <span class="col-xs-10">{{$company}}</span>
            </p>
            <p class="col-xs-12">
                <label class="col-xs-2">備註</label>
                <textarea class="col-xs-10">{{$memo}}</textarea>
            </p>
            <p class="col-xs-12">
                <label class="col-xs-2">建立時間</label>
                <span class="col-xs-10">{{$created_at}}</span>
            </p>
            <a href="/admin/contact">返回</a>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src='/lib/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src="/lib/underscore.js"></script>
    <script src="/lib/backbone.js"></script>
</html>
