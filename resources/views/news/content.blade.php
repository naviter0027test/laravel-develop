<html>
    <head>
        <title> example test laravel </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/header.css' rel='stylesheet' />
        <link href='/css/breadCrumbs.css' rel='stylesheet' />
        <link href='/css/newsContent.css' rel='stylesheet' />
    </head>
    <body>
        @include('header')
        <div class="breadCrumbs col-xs-12">
            <a href="/index.php" class="glyphicon glyphicon-home">
                <div class="right nonActive"></div>
            </a> 
            <a href="/index.php/news" class="">
                <div class="gray"></div>
                <label>新聞列表</label>
                <div class="right nonActive"></div>
            </a> 
            <span>
                <div class="left active"></div><label>{{$news->title}}</label>
            </span>
        </div>
        <div class="newsContent col-xs-12 col-sm-9 col-md-9">
            <h2 class="col-xs-12 title">
                <label class="glyphicon glyphicon-th"></label>
                {{$news->title}}
            </h2>
            <div class="col-xs-12">
                {!! $news->content !!}
            </div>
        </div>
        <div class="newsNav col-xs-12 col-sm-3 col-md-3">
            <h4 class="col-xs-12">
                <label class="glyphicon glyphicon-th-large"></label>
                最新消息</h4>
            @foreach ($data as $d)
            <a href="/index.php/news/{{$d->id}}" class="col-xs-12">
                <label class="glyphicon glyphicon-asterisk"></label>
                {{$d->title}}
            </a>
            @endforeach
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src='/lib/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src="/lib/underscore.js"></script>
    <script src="/lib/backbone.js"></script>
</html>

