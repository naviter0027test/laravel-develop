<html>
    <head>
        <meta charset='utf-8' />
        <title>member profile</title>
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
                <div class="left active"></div><label>{{ trans('member.profile') }}</label>
            </span>
        </div>
        <h3 class="title col-xs-12">{{ trans('member.profile') }}</h3>
        @include ('member.memberSidebar')
        <div class="memberDiv col-xs-9 col-sm-9 col-md-9">
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
            <form action="/member/update" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT" />
                <input type="hidden" name="id" value="{{ $mem['id'] }}" />
                <p class="col-xs-12">
                    <span class="col-xs-3 inputTitle">
                        <label class="glyphicon glyphicon-envelope"></label>
                        {{ trans('member.account') }}
                    </span>
                    <input type="text" name="email" value="{{ $mem['email'] }}" class="col-xs-8 inputField" />
                </p>
                <p class="col-xs-12">
                    <span class="col-xs-3 inputTitle">
                        <label class="glyphicon glyphicon-console"></label>
                        {{ trans('member.newPassword') }}
                    </span>
                    <input type="password" name="newPassword" class="col-xs-8 inputField" />
                </p>
                <p class="col-xs-12">
                    <span class="col-xs-3 inputTitle">
                        <label class="glyphicon glyphicon-console"></label>
                        {{ trans('member.passwordRepeat') }}
                    </span>
                    <input type="password" name="passwordRepeat" class="col-xs-8 inputField" />
                </p>
                <p class="col-xs-12">
                    <span class="col-xs-3 inputTitle">
                        <label class="glyphicon glyphicon-pencil"></label>
                        {{ trans('member.name') }}
                    </span>
                    <input type="text" name="name" value="{{ $mem['name'] }}" class="col-xs-8 inputField" />
                </p>
                <p class="col-xs-12">
                    <span class="col-xs-3 inputTitle">
                        <label class="glyphicon glyphicon-phone"></label>
                        {{ trans('member.phone') }}
                    </span>
                    <input type="text" name="phone" value="{{ $mem['phone'] }}" class="col-xs-8 inputField" />
                </p>
                <p class="col-xs-12">
                    <span class="col-xs-3 inputTitle">
                        <label class="glyphicon glyphicon-earphone"></label>
                        {{ trans('member.tel') }}
                    </span>
                    <input type="text" name="phone" value="{{ $mem['tel'] }}" class="col-xs-8 inputField" />
                </p>
                <p class="col-xs-12">
                    <span class="col-xs-3 inputTitle">
                        <label class="glyphicon glyphicon-road"></label>
                        {{ trans('member.address') }}
                    </span>
                    <input type="text" name="address" value="{{ $mem['address'] }}" class="col-xs-8 inputField" />
                </p>
                <button class="col-xs-3 check">{{ trans('member.check') }}</button>
            </form>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src='/lib/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src="/lib/underscore.js"></script>
    <script src="/lib/backbone.js"></script>
</html>
