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
        <link href='/css/admin/news.css' rel='stylesheet' />
    </head>
    <body>
        @include('adm.header')
        @include('adm.dashboard-left')
        <span class="breadcrumbs col-xs-9">
            新聞修改
        </span>
        <div class="col-xs-9">
            <form action="news" method="post" class="newsCreate col-xs-12">
                <span class="col-xs-12 col-sm-3">新聞標題</span>
                <input type="text" name="title" class="col-xs-12 col-sm-9" />
                <span class="col-xs-12 col-sm-12">新聞內容</span>
                <textarea name="content" class="ckeditor col-xs-12 col-sm-12" ></textarea>
                <button class="col-xs-2">確定</button>
            </form>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src='/lib/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src="/lib/underscore.js"></script>
    <script src="/lib/backbone.js"></script>
    <script src="/lib/ckeditor_full/ckeditor.js"></script>
</html>
