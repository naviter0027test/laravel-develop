<html>
    <head>
        <title>admin news list</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/admin/header.css' rel='stylesheet' />
        <link href='/css/admin/dashboard-left.css' rel='stylesheet' />
        <link href='/css/admin/dashboard.css' rel='stylesheet' />
        <link href='/css/admin/news.css' rel='stylesheet' />
    </head>
    <body>
        @include('adm.header')
        @include('adm.dashboard-left')
        <span class="breadcrumbs col-xs-9">
            新聞列表
            <a href="#">+</a>
        </span>
        <div class="col-xs-9 newsList">
            <table class="col-xs-12 table">
                <thead>
                    <tr>
                        <td>新聞標題</td>
                        <td>建立時間</td>
                        <td>修改時間</td>
                        <td>操作</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>新聞標題1</td>
                        <td>2016-11-21 17:34:49</td>
                        <td>2016-12-03 12:14:28</td>
                        <td>
                            <a href="/index.php/admin/news/3/edit" class="glyphicon glyphicon-pencil"></a>
                            <a href="#" class="glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>新聞標題2</td>
                        <td>2016-10-14 09:42:28</td>
                        <td>2016-12-02 18:19:38</td>
                        <td>
                            <a href="/index.php/admin/news/3/edit" class="glyphicon glyphicon-pencil"></a>
                            <a href="#" class="glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>新聞標題3</td>
                        <td>2016-01-23 10:12:01</td>
                        <td>2016-10-01 14:14:28</td>
                        <td>
                            <a href="/index.php/admin/news/3/edit" class="glyphicon glyphicon-pencil"></a>
                            <a href="#" class="glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>新聞標題4</td>
                        <td>2015-07-22 00:12:33</td>
                        <td>2016-11-16 10:30:41</td>
                        <td>
                            <a href="/index.php/admin/news/3/edit" class="glyphicon glyphicon-pencil"></a>
                            <a href="#" class="glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>新聞標題5</td>
                        <td>2016-04-28 09:44:34</td>
                        <td>2016-05-12 08:18:59</td>
                        <td>
                            <a href="/index.php/admin/news/3/edit" class="glyphicon glyphicon-pencil"></a>
                            <a href="#" class="glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src='/lib/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src="/lib/underscore.js"></script>
    <script src="/lib/backbone.js"></script>
</html>
