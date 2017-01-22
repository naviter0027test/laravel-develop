<html>
    <head>
        <title>form test</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <form action="postFirst" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="text" name="aaa" />
            <button>ok</button>
        </form>
    </body>
</html>
