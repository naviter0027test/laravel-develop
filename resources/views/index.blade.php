<html>
    <head>
        <title> example test laravel </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/lib/jquery.bxslider.css' rel='stylesheet' />
        <link href='/css/header.css' rel='stylesheet' />
        <link href='/css/adSlide.css' rel='stylesheet' />
        <link href='/css/index.css' rel='stylesheet' />
    </head>
    <body>
        <nav class="navbar header col-xs-12 col-sm-12 col-md-12">
            <div class="container-fluid">
                <button type="button" class="navbar-toggle glyphicon glyphicon-option-horizontal" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="imgs/absLogo.png" class=""/>
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
        <div class="ad col-xs-12 col-sm-12 col-md-12">
            <ul class="bgSlider col-xs-12 ">
                <li><img src="http://bxslider.com/images/730_200/tree_root.jpg" /></li>
                <li><img src="http://bxslider.com/images/730_200/hill_road.jpg" /></li>
                <li><img src="http://bxslider.com/images/730_200/trees.jpg" /></li>
            </ul>
        </div>
        <div class="indexNews col-xs-12 col-sm-12 col-md-6">
            <h2 class="col-xs-12">最新消息</h2>
            <a href="#" class="col-xs-12">
                新聞標題 
                <span>2017-02-07</span>
            </a>
            <a href="#" class="col-xs-12">
                新聞標題 
                <span>2017-02-07</span>
            </a>
            <a href="#" class="col-xs-12">
                新聞標題 
                <span>2017-02-07</span>
            </a>
            <a href="#" class="col-xs-12">
                新聞標題 
                <span>2017-02-07</span>
            </a>
            <a href="#" class="col-xs-12">
                新聞標題 
                <span>2017-02-07</span>
            </a>
            <a class="more" href="index.php/newsList/0">更多消息...</a>
        </div>
        <div class="googlemap col-xs-12 col-sm-12 col-md-6">
            <iframe class="col-xs-12" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src=http://maps.google.com.tw/maps?f=q&hl=zh-TW&geocode=&q=台北市新生南路三段90號&z=16&output=embed&t=></iframe>
        </div>
        <div class="googlemap col-xs-12 col-sm-12 col-md-12">
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src='/lib/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src="/lib/underscore.js"></script>
    <script src="/lib/backbone.js"></script>
    <script src="/lib/jquery.bxslider.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".bgSlider").bxSlider({
                mode: 'fade',
                captions: true
            });
        });
    </script>
</html>
