<html>
    <head>
        <title>store html</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <form action="rmb" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            rmb form: <br />
            money: <input type="text" name="money" />
            <br />
            no: <input type="text" name="no" />
            <br />
            <button>ok</button>
        </form>
    </body>
</html>
