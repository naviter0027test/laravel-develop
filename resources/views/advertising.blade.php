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
        <link href='/css/virProduct.css' rel='stylesheet' />
    </head>
    <body>
        @include('header')
        <div class="breadCrumbs col-xs-12">
            <a href="/" class="glyphicon glyphicon-home">
                <div class="right nonActive"></div>
            </a> 
            <span>
                <div class="left active"></div><label>{{ trans('header.adv') }}</label>
            </span>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-9">
            <div class="col-xs-3 advImg">
                <div class="text-center">
                    <img src="https://fakeimg.pl/150/" />
                </div>
                <div class="text-center productName">廣告一個月</div>
                <div class="buyInfo">
                    <span>NTD <label>999</label></span>
                    <button>購買</button>
                </div>
            </div>
            <div class="col-xs-3 advImg">
                <div class="text-center">
                    <img src="https://fakeimg.pl/150/" />
                </div>
                <div class="text-center productName">廣告三個月</div>
                <div class="buyInfo">
                    <span>NTD <label>1980</label></span>
                    <button>購買</button>
                </div>
            </div>
            <div class="col-xs-3 advImg">
                <div class="text-center">
                    <img src="https://fakeimg.pl/150/" />
                </div>
                <div class="text-center productName">廣告六個月</div>
                <div class="buyInfo">
                    <span>NTD <label>3980</label></span>
                    <button>購買</button>
                </div>
            </div>
            <div class="col-xs-3 advImg">
                <div class="text-center">
                    <img src="https://fakeimg.pl/150/" />
                </div>
                <div class="text-center productName">廣告一年</div>
                <div class="buyInfo">
                    <span>NTD <label>5980</label></span>
                    <button>購買</button>
                </div>
            </div>
            <div class="col-xs-3 advImg">
                <div class="text-center">
                    <img src="https://fakeimg.pl/150/" />
                </div>
                <div class="text-center productName">廣告兩年</div>
                <div class="buyInfo">
                    <span>NTD <label>7980</label></span>
                    <button>購買</button>
                </div>
            </div>
            <div class="col-xs-3 advImg">
                <div class="text-center">
                    <img src="https://fakeimg.pl/150/" />
                </div>
                <div class="text-center productName">廣告五年</div>
                <div class="buyInfo">
                    <span>NTD <label>9980</label></span>
                    <button>購買</button>
                </div>
            </div>
        </div>
        <div class="oneNav col-xs-12 col-sm-3 col-md-3">
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src='/lib/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src='/js/advertising.js'></script>
</html>
