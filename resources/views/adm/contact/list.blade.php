<html>
    <head>
        <title>admin contact list</title>
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
            聯絡列表
        </span>
        <div class="col-xs-9 newsList">
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
                        <td>姓名</td>
                        <td>手機</td>
                        <td>E-mail</td>
                        <td>建立時間</td>
                        <td>操作</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list as $item)
                    <tr>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['phone']}}</td>
                        <td>{{$item['email']}}</td>
                        <td>{{$item['created_at']}}</td>
                        <td>
                            <a href="/admin/contact/{{$item['id']}}" class="glyphicon glyphicon-eye-open"></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $list->render() !!}
        </div>
    </body>
    <script src="/lib/jquery-2.1.4.min.js"></script>
    <script src='/lib/bootstrap/dist/js/bootstrap.min.js'></script>
    <script src="/lib/underscore.js"></script>
    <script src="/lib/backbone.js"></script>
</html>
