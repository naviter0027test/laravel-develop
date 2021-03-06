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
        <link href='/css/one.css' rel='stylesheet' />
    </head>
    <body>
        @include('header')
        <div class="breadCrumbs col-xs-12">
            <a href="/" class="glyphicon glyphicon-home">
                <div class="right nonActive"></div>
            </a> 
            <span>
                <div class="left active"></div><label>{{ trans('member.login') }}</label>
            </span>
        </div>
        <div class="memberDiv col-xs-12 col-sm-9 col-md-9">
        @if (count($errors) > 0)
            <br />
            <div class="alert alert-danger"> 
                @foreach ($errors->all() as $err)
                <p> {{ $err }} </p>
                @endforeach
            </div>
        @endif
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if (Session::has('alert-'. $msg))
            <br />
            <div class="alert alert-{{ $msg }}"> 
                <p> {{ Session::get('alert-'. $msg) }} </p>
            </div>
            @endif
        @endforeach
            <form action="/member/login" method="post">
                {{ csrf_field() }}
                <h3 class="title">{{ trans('member.login') }}</h3>
                <p class="col-xs-12">
                    <span class="col-xs-3 inputTitle">
                        <label class="glyphicon glyphicon-user"></label>
                        {{ trans('member.account') }}
                    </span>
                    <input type="text" name="email" class="col-xs-8 inputField" />
                </p>
                <p class="col-xs-12">
                    <span class="col-xs-3 inputTitle">
                        <label class="glyphicon glyphicon-console"></label>
                        {{ trans('member.password') }}
                    </span>
                    <input type="password" name="password" class="col-xs-8 inputField" />
                </p>
                <button class="col-xs-3 check">{{ trans('member.check') }}</button>
            </form>
        </div>
        <div class="oneNav col-xs-12 col-sm-3 col-md-3">
            <h4 class="col-xs-12">其他介紹</h4>
            @foreach ($allPage as $num => $page)
            <p class="col-xs-12">
                <label class="col-xs-1">{{ $num+1 }}</label>
                <a href="/onepage/{{$page->id}}" class="col-xs-9">{{ $page->title }}</a>
            </p>
            @endforeach
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src='/lib/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src="/lib/underscore.js"></script>
    <script src="/lib/backbone.js"></script>
</html>
