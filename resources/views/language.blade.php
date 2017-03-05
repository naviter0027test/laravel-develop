<html>
    <head>
        <title> example test laravel </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/lib/jquery.bxslider.css' rel='stylesheet' />
        <link href='/css/header.css' rel='stylesheet' />
        <link href='/css/breadCrumbs.css' rel='stylesheet' />
        <link href='/css/language.css' rel='stylesheet' />
    </head>
    <body>
        @include('header')
        <div class="breadCrumbs col-xs-12">
            <a href="/index.php" class="glyphicon glyphicon-home">
                <div class="right nonActive"></div>
            </a> 
            <span>
                <div class="left active"></div><label>選擇語系</label>
            </span>
        </div>
        <div class="col-xs-12">
            <h3 class="title col-xs-12">
                <label class="glyphicon glyphicon-th">
                語系選擇
            </h3>
            <div class="chooseContent col-xs-12">
                <a href="/index.php/lan/zh" class="lanBtn col-xs-3">
                    <span>繁體</span>
                </a>
                <a href="/index.php/lan/cn" class="lanBtn col-xs-3">
                    <span>簡體</span>
                </a>
                <a href="/index.php/lan/en" class="lanBtn col-xs-3">
                    <span>英文</span>
                </a>
            </div>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src='/lib/bootstrap/dist/js/bootstrap.min.js'></script>
</html>
