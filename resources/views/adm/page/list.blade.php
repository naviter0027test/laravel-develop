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
            頁面列表
        </span>
        <div class="col-xs-9">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if (Session::has('alert-'. $msg))
            <br />
            <div class="alert alert-{{ $msg }}"> 
                <p> {{ Session::get('alert-'. $msg) }} </p>
            </div>
            @endif
        @endforeach
            <table class="col-xs-12 table">
                <thead>
                    <tr>
                        <td>頁面標題</td>
                        <td>修改時間</td>
                        <td>操作</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $item['title'] }}</td>
                        <td>{{ $item['updated_at'] }}</td>
                        <td>
                            <a href="/index.php/admin/page/{{ $item['id'] }}/edit" class="glyphicon glyphicon-pencil"></a>
                        </td>
                    </tr>
                    @endforeach
                    <!--
                    <tr>
                        <td>關於我們</td>
                        <td>2016-12-03 12:14:28</td>
                        <td>
                            <a href="/index.php/admin/page/3/edit" class="glyphicon glyphicon-pencil"></a>
                            <a href="#" class="glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>公司歷史</td>
                        <td>2016-12-02 18:19:38</td>
                        <td>
                            <a href="/index.php/admin/page/3/edit" class="glyphicon glyphicon-pencil"></a>
                            <a href="#" class="glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>聯絡資訊</td>
                        <td>2016-10-01 14:14:28</td>
                        <td>
                            <a href="/index.php/admin/page/3/edit" class="glyphicon glyphicon-pencil"></a>
                            <a href="#" class="glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>加入我們</td>
                        <td>2016-11-16 10:30:41</td>
                        <td>
                            <a href="/index.php/admin/page/3/edit" class="glyphicon glyphicon-pencil"></a>
                            <a href="#" class="glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                    <tr>
                        <td>如何合作</td>
                        <td>2016-05-12 08:18:59</td>
                        <td>
                            <a href="/index.php/admin/page/3/edit" class="glyphicon glyphicon-pencil"></a>
                            <a href="#" class="glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                    -->
                </tbody>
            </table>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src='/lib/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src="/lib/underscore.js"></script>
    <script src="/lib/backbone.js"></script>
</html>
