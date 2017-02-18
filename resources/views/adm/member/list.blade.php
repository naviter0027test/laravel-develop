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
            <a href="/index.php/admin/member/create">+</a>
        </span>
        <div class="col-xs-9 memList">
            <table class="col-xs-12 table">
                <thead>
                    <tr>
                        <td>會員名稱</td>
                        <td>email</td>
                        <td>狀態</td>
                        <td>建立時間</td>
                        <td>操作</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td>{{ $item['active'] }}</td>
                        <td>{{ $item['created_at'] }}</td>
                        <td>
                            <a href="/index.php/admin/member/{{ $item['id'] }}/edit" class="glyphicon glyphicon-pencil"></a>
                            <a href="/index.php/admin/member/{{ $item['id'] }}/" class="glyphicon glyphicon-trash"></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <form id="deleteMember" action="" method="post" />
                <input type="hidden" name="_method" value="DELETE" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            </form>
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src='/lib/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src="/lib/underscore.js"></script>
    <script src="/lib/backbone.js"></script>
    <script src="/js/admin/member/list.js"></script>
</html>
