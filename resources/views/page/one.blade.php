<html>
    <head>
        <title> example test laravel </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/header.css' rel='stylesheet' />
        <link href='/css/one.css' rel='stylesheet' />
    </head>
    <body>
        @include('header')
        <div class="oneContent col-xs-12 col-sm-9 col-md-9">
            <h2 class="col-xs-12">{{$title}}</h2>
            <div class="col-xs-12">
                {!! $content !!}
            </div>
        </div>
        <div class="oneNav col-xs-12 col-sm-3 col-md-3">
            <h4 class="col-xs-12">其他介紹</h4>
            @foreach ($allPage as $num => $page)
            <p class="col-xs-12">
                <label class="col-xs-1">{{ $num+1 }}</label>
                <a href="{{$page->id}}" class="col-xs-9">{{ $page->title }}</a>
            </p>
            @endforeach
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src='/lib/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src="/lib/underscore.js"></script>
    <script src="/lib/backbone.js"></script>
</html>
