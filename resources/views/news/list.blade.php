<html>
    <head>
        <title> example test laravel </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/header.css' rel='stylesheet' />
        <link href='/css/breadCrumbs.css' rel='stylesheet' />
        <link href='/css/newsList.css' rel='stylesheet' />
    </head>
    <body>
        @include('header')
        <div class="breadCrumbs col-xs-12">
            <a href="/index.php" class="glyphicon glyphicon-home">
                <div class="right nonActive"></div>
            </a> 
            <span>
                <div class="left active"></div><label>最新消息</label>
            </span>
        </div>
        <div class="newsList col-xs-12 col-sm-12 col-md-12">
            <h4 class="col-xs-12">最新消息</h4>
            @foreach ($data as $news) 
            <a href="/index.php/news/{{ $news['id'] }}" class="col-xs-12"><label class="glyphicon glyphicon-bookmark"></label>{{ $news['title'] }} <span>{{ $news['updated_at'] }}</span></a>
            @endforeach
        </div>
        <div class="pager col-xs-12 col-sm-12 col-md-12">
            {!! $render !!}
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src='/lib/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src="/lib/underscore.js"></script>
    <script src="/lib/backbone.js"></script>
</html>

