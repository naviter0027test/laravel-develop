<html>
    <head>
        <title> example test laravel </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/header.css' rel='stylesheet' />
        <link href='/css/breadCrumbs.css' rel='stylesheet' />
        <link href='/css/one.css' rel='stylesheet' />
    </head>
    <body>
        @include('header')
        <div class="breadCrumbs col-xs-12">
            <a href="/index.php" class="glyphicon glyphicon-home">
                <div class="right nonActive"></div>
            </a> 
            <span>
                <div class="left active"></div><label>{{$title}}</label>
            </span>
        </div>
        <div class="oneContent col-xs-12 col-sm-9 col-md-9">
            <h2 class="col-xs-12">{{$title}}</h2>
            <div class="col-xs-12">
                {!! $content !!}
            </div>
        </div>
        <div class="oneNav col-xs-12 col-sm-3 col-md-3">
            <h4 class="col-xs-12">其他介紹</h4>
            <p class="col-xs-12">
                <label class="col-xs-1">1</label>
                <a href="2" class="col-xs-9"> 公司歷史 </a>
            </p>
            <p class="col-xs-12">
                <label class="col-xs-1">2</label>
                <a href="3" class="col-xs-9"> 公司文化 </a>
            </p>
            <p class="col-xs-12">
                <label class="col-xs-1">3</label>
                <a href="4" class="col-xs-9"> 人才招募 </a>
            </p>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src='/lib/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src="/lib/underscore.js"></script>
    <script src="/lib/backbone.js"></script>
</html>
