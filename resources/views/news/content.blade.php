<html>
    <head>
        <title> example test laravel </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/header.css' rel='stylesheet' />
        <link href='/css/newsContent.css' rel='stylesheet' />
    </head>
    <body>
        <nav class="navbar header col-xs-12 col-sm-12 col-md-12">
            <div class="container-fluid">
                <button type="button" class="navbar-toggle glyphicon glyphicon-option-horizontal" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="/imgs/absLogo.png" class=""/>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav topmenu">
                    <li><a href="/index.php/onepage/1">關於我們</a></li>
                    <li><a href="/index.php/news">最新消息</a></li>
                    <li><a href="/index.php/memberLogin">會員專區</a></li>
                    <li><a href="/index.php/contact">聯絡我們</a></li>
                </ul>
            </div>
        </nav>
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

