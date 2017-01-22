<html>
    <head>
        <title>form test</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <form action="autobind/10" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <button>ok</button>
        </form>
    </body>
</html>

