<html>
    <head>
        <meta charset='utf-8' />
        <title>member verify</title>
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
            <a href="/member/show" class="">
                <div class="gray"></div>
                <label>{{ trans('member.main') }}</label>
                <div class="right nonActive"></div>
            </a> 
            <span>
                <div class="left active"></div><label>{{ trans('member.verify') }}</label>
            </span>
        </div>
        <div class="memberDiv col-xs-12 col-sm-12 col-md-12">
            <h3 class="title col-xs-12">{{ trans('member.verify') }}</h3>
            <div class="verifyDiv col-xs-5">
                <h4>郵件啟用</h4>
                <label class="col-xs-4">您的郵件</label>
                <span class="col-xs-8">{{ $mem['email'] }}</span>
                <form action="/sendVerifyMail" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="email" value="{{ $mem['email'] }}" />
                    <button class="col-xs-12">寄出驗證信</button>
                </form>
            </div>
            <span class="or col-xs-1">或</span>
            <div class="verifyDiv col-xs-5">
                <h4>手機啟用</h4>
                <label class="col-xs-4">您的手機</label>
                <span class="col-xs-8">{{ $mem['phone'] }}</span>
                <form action="/member/getSMS/{{$mem['id']}}" method="post">
                    {{ csrf_field() }}
                    <button class="col-xs-12">取得驗證碼</button>
                </form>
                <form action="/member/verifySMS" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$mem['id']}}" />
                    <input name="smscode" placeholder="輸入驗證碼" class="col-xs-12 inputsms"/>
                    <button class="col-xs-12">驗證</button>
                </form>
            </div>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src='/lib/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src="/lib/underscore.js"></script>
    <script src="/lib/backbone.js"></script>
</html>
