<html>
    <head>
        <title> example test laravel </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/header.css' rel='stylesheet' />
        <link href='/css/newsList.css' rel='stylesheet' />
    </head>
    <body>
        @include('header')
        <div class="newsNav col-xs-12 col-sm-12 col-md-12">
            <h4 class="col-xs-12">最新消息</h4>
            @foreach ($data as $news) 
            <a href="/index.php/news/{{ $news->id }}" class="col-xs-12">{{ $news->title }} <span>{{ $news->updated_at }}</span></a>
            @endforeach
            @if ($prev_page_url != null)
                <a href="{{$prev_page_url}}"> << </a>
            @endif
            第{{$current_page}}頁
            @if ($next_page_url != null)
                <a href="{{$next_page_url}}"> >> </a>
            @endif
        </div>
        <div class="pager col-xs-12 col-sm-12 col-md-12">
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src='/lib/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src="/lib/underscore.js"></script>
    <script src="/lib/backbone.js"></script>
</html>

