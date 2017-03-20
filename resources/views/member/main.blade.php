<html>
    <head>
        <meta charset='utf-8' />
        <title>member login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/header.css' rel='stylesheet' />
        <link href='/css/breadCrumbs.css' rel='stylesheet' />
        <link href='/css/member.css' rel='stylesheet' />
    </head>
    <body>
        @include('header')
        <div class="breadCrumbs col-xs-12">
            <a href="/" class="glyphicon glyphicon-home">
                <div class="right nonActive"></div>
            </a> 
            <span>
                <div class="left active"></div><label>{{ trans('member.main') }}</label>
            </span>
        </div>
        <div class="memberSidebar col-xs-3 col-sm-3 col-md-3">
            <a href="/member/profile" class="col-xs-12">{{ trans('member.profile') }}</a>
            <a href="/member/verifyPage" class="col-xs-12">{{ trans('member.verify') }}</a>
            <a href="/member/logout" class="col-xs-12">{{ trans('member.logout') }}</a>
        </div>
        <div class="memberDiv col-xs-9 col-sm-9 col-md-9">
            歡迎登入
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src='/lib/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src="/lib/underscore.js"></script>
    <script src="/lib/backbone.js"></script>
</html>
