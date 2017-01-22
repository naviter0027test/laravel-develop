<html>
    <head>
        <title>upload test</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <form action="postFirst/upload" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="file" name="uploadTest" />
            <button>ok</button>
        </form>
    </body>
</html>

