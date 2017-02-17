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
        <link href='/css/admin/page.css' rel='stylesheet' />
    </head>
    <body>
        @include('adm.header')
        @include('adm.dashboard-left')
        <span class="breadcrumbs col-xs-9">
            頁面修改
        </span>
        <div class="col-xs-9">
            <form action="/index.php/admin/page/{{ $id }}" method="post" class="pageEdit col-xs-12">
                {{ csrf_field() }}
                {{ method_field("PUT") }}
                <span class="col-xs-12 col-sm-3">頁面標題</span>
                <input type="text" name="title" class="col-xs-12 col-sm-9" value="{{ $title }}" />
                <span class="col-xs-12 col-sm-12">頁面內容</span>
                <textarea name="content" class="ckeditor col-xs-12 col-sm-12" >{{ $content }}</textarea>
                <button class="col-xs-2">確定</button>
            </form>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src='/lib/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src="/lib/underscore.js"></script>
    <script src="/lib/backbone.js"></script>
    <script src="/lib/ckeditor_full/ckeditor.js"></script>
    <script src="/js/admin/page/edit.js"></script>
</html>

