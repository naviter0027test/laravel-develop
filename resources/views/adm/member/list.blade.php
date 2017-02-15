<html>
    <head>
        <title> admin </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='/lib/bootstrap/dist/css/bootstrap.min.css' rel='stylesheet' />
        <link href='/lib/bootstrap/dist/css/bootstrap-theme.min.css' rel='stylesheet' />
        <link href='/css/admin/header.css' rel='stylesheet' />
        <link href='/css/admin/dashboard-left.css' rel='stylesheet' />
        <link href='/css/admin/dashboard.css' rel='stylesheet' />
    </head>
    <body>
        @include('adm.header')
        @include('adm.dashboard-left')
        <span class="breadcrumbs col-xs-9">
            會員列表
            <a href="#">+</a>
        </span>
        <div class="col-xs-9 memList">
            <table class="col-xs-12 table">
                <thead>
                    <tr>
                        <td>會員名稱</td>
                        <td>email</td>
                        <td>建立時間</td>
                        <td>操作</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>陳小明</td>
                        <td>test8@test.com.tw</td>
                        <td>2016-12-03 12:14:28</td>
                        <td>
                            <a href="#" class="glyphicon glyphicon-pencil"></a>
                            <a href="#" class="glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>陳大明</td>
                        <td>test9@test.com.tw</td>
                        <td>2016-12-02 12:14:28</td>
                        <td>
                            <a href="#" class="glyphicon glyphicon-pencil"></a>
                            <a href="#" class="glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>陳明明</td>
                        <td>test5@test.com.tw</td>
                        <td>2016-12-03 12:14:28</td>
                        <td>
                            <a href="#" class="glyphicon glyphicon-pencil"></a>
                            <a href="#" class="glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>陳明宣</td>
                        <td>test19@test.com.tw</td>
                        <td>2016-12-03 14:22:41</td>
                        <td>
                            <a href="#" class="glyphicon glyphicon-pencil"></a>
                            <a href="#" class="glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>陳明宗</td>
                        <td>test23@test.com.tw</td>
                        <td>2016-12-03 18:30:11</td>
                        <td>
                            <a href="#" class="glyphicon glyphicon-pencil"></a>
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
