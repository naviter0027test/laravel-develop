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
        @include('header')
        <div class="ad col-xs-12 col-sm-12 col-md-12">
            <ul class="bgSlider col-xs-12 ">
                <li><img src="http://bxslider.com/images/730_200/tree_root.jpg" /></li>
                <li><img src="http://bxslider.com/images/730_200/hill_road.jpg" /></li>
                <li><img src="http://bxslider.com/images/730_200/trees.jpg" /></li>
            </ul>
        </div>
        <div class="indexNews col-xs-12 col-sm-12 col-md-6">
            <h2 class="col-xs-12"><label class="glyphicon glyphicon-book"></label>最新消息</h2>
            <a href="#" class="col-xs-12">
                <label class="glyphicon glyphicon-bookmark"></label>
                新聞標題 
                <span>2017-02-07</span>
            </a>
            <a href="#" class="col-xs-12">
                <label class="glyphicon glyphicon-bookmark"></label>
                新聞標題 
                <span>2017-02-07</span>
            </a>
            <a href="#" class="col-xs-12">
                <label class="glyphicon glyphicon-bookmark"></label>
                新聞標題 
                <span>2017-02-07</span>
            </a>
            <a href="#" class="col-xs-12">
                <label class="glyphicon glyphicon-bookmark"></label>
                新聞標題 
                <span>2017-02-07</span>
            </a>
            <a href="#" class="col-xs-12">
                <label class="glyphicon glyphicon-bookmark"></label>
                新聞標題 
                <span>2017-02-07</span>
            </a>
            <a class="more" href="index.php/news">
                <label class="glyphicon glyphicon-play"></label>
                <label class="glyphicon glyphicon-play"></label>
                更多消息...</a>
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
