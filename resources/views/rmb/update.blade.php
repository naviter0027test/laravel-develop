<html>
    <head>
        <title>update html</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <form action="rmb/update" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <!-- <input type="hidden" name="_method" value="put" /> -->
            rmb update form: <br />
            id: <input type="text" name="id" />
            <br />
            money: <input type="text" name="money" />
            <br />
            <button>ok</button>
        </form>
    </body>
</html>

