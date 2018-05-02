<html>
    <head>
        <title>update html</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <form action="rmb/mutiupdate" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            rmb update form: <br />
            money > <input type="text" name="money" />
            <br />
            <button>ok</button>
        </form>
    </body>
</html>


