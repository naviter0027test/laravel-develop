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
        <link href='/css/one.css' rel='stylesheet' />
        <link href='/css/contact.css' rel='stylesheet' />
    </head>
    <body>
        @include('header')
        <div class="contactForm col-xs-12 col-sm-9 col-md-9">
            <form action="" method="post">
                <h3>聯絡我們</h3>
                <p class="col-xs-12">
                    <span class="col-xs-3">
                        <label class="glyphicon glyphicon-pencil"></label>
                        姓名
                    </span>
                    <input type="text" name="name" class="col-xs-8" />
                </p>
                <p class="col-xs-12">
                    <span class="col-xs-3">
                        <label class="glyphicon glyphicon-phone"></label>
                        手機 
                    </span>
                    <input type="text" name="name" class="col-xs-8" />
                </p>
                <p class="col-xs-12">
                    <span class="col-xs-3">
                        <label class="glyphicon glyphicon-envelope"></label>
                        信箱
                    </span>
                    <input type="text" name="email" class="col-xs-8" />
                </p>
                <p class="col-xs-12">
                    <span class="col-xs-3">
                        <label class="glyphicon glyphicon-calendar"></label>
                        公司名稱
                    </span>
                    <input type="text" name="company" class="col-xs-8" />
                </p>
                <p class="col-xs-12">
                    <span class="col-xs-3">
                        <label class="glyphicon glyphicon-comment"></label>
                        內容
                    </span>
                    <textarea name="memo" class="col-xs-8"></textarea>
                </p>
                <button class="col-xs-2">提交</button>
            </form>
        </div>
        <div class="oneNav col-xs-12 col-sm-3 col-md-3">
            <h4 class="col-xs-12">其他介紹</h4>
            <p class="col-xs-12">
                <label class="col-xs-1">1</label>
                <a href="2" class="col-xs-9"> 公司歷史 </a>
            </p>
            <p class="col-xs-12">
                <label class="col-xs-1">2</label>
                <a href="3" class="col-xs-9"> 公司文化 </a>
            </p>
            <p class="col-xs-12">
                <label class="col-xs-1">3</label>
                <a href="4" class="col-xs-9"> 人才招募 </a>
            </p>
        </div>
    </body>
</html>
