<html>
    <head>
        <meta charset='utf-8' />
        <title>member verify result</title>
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
                <div class="left active"></div><label>{{ trans('member.verifyResult') }}</label>
            </span>
        </div>
        <div class="memberDiv col-xs-12 col-sm-9 col-md-9">
            <h3 class="title">{{ trans('member.verifyResult') }}</h3>
            <div class="verifySuccess">
                {{ trans('member.verifySuccess') }}
            </div>
            <div class="verifyFailure">
                {{ trans('member.verifyFailure') }}
            </div>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src='/lib/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src="/lib/underscore.js"></script>
    <script src="/lib/backbone.js"></script>
</html>
