<html>
    <head>
        <title> example test laravel </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/lib/jquery.bxslider.css' rel='stylesheet' />
        <link href='/css/header.css' rel='stylesheet' />
        <link href='/css/breadCrumbs.css' rel='stylesheet' />
        <link href='/css/adSlide.css' rel='stylesheet' />
        <link href='/css/one.css' rel='stylesheet' />
        <link href='/css/contact.css' rel='stylesheet' />
    </head>
    <body>
        @include('header')
        <div class="breadCrumbs col-xs-12">
            <a href="/index.php" class="glyphicon glyphicon-home">
                <div class="right nonActive"></div>
            </a> 
            <span>
                <div class="left active"></div><label>{{ trans('contact.contact_us') }}</label>
            </span>
        </div>
        <div class="contactForm col-xs-12 col-sm-9 col-md-9">
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
            <form action="/index.php/contactAdd" method="post">
                {{ csrf_field() }}
                <h3>{{ trans('contact.contact_us') }}</h3>
                <p class="col-xs-12">
                    <span class="col-xs-3">
                        <label class="glyphicon glyphicon-pencil"></label>
                        {{ trans('contact.name') }}
                    </span>
                    <input type="text" name="name" class="col-xs-8" />
                </p>
                <p class="col-xs-12">
                    <span class="col-xs-3">
                        <label class="glyphicon glyphicon-phone"></label>
                        {{ trans('contact.phone') }} 
                    </span>
                    <input type="text" name="phone" class="col-xs-8" />
                </p>
                <p class="col-xs-12">
                    <span class="col-xs-3">
                        <label class="glyphicon glyphicon-envelope"></label>
                        {{ trans('contact.email') }}
                    </span>
                    <input type="text" name="email" class="col-xs-8" />
                </p>
                <p class="col-xs-12">
                    <span class="col-xs-3">
                        <label class="glyphicon glyphicon-calendar"></label>
                        {{ trans('contact.company') }}
                    </span>
                    <input type="text" name="company" class="col-xs-8" />
                </p>
                <p class="col-xs-12">
                    <span class="col-xs-3">
                        <label class="glyphicon glyphicon-comment"></label>
                        {{ trans('contact.content') }}
                    </span>
                    <textarea name="memo" class="col-xs-8"></textarea>
                </p>
                <button class="col-xs-2">{{ trans('contact.submit') }}</button>
            </form>
        </div>
        <div class="oneNav col-xs-12 col-sm-3 col-md-3">
            <h4 class="col-xs-12">其他介紹</h4>
            @foreach ($allPage as $num => $page)
            <p class="col-xs-12">
                <label class="col-xs-1">{{ $num+1 }}</label>
                <a href="/index.php/onepage/{{$page->id}}" class="col-xs-9">{{ $page->title }}</a>
            </p>
            @endforeach
        </div>
    </body>
</html>
