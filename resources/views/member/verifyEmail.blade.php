<html>
    <head>
        <title>帳號啟用驗證</title>
        <meta charset="utf-8" />
    </head>
    <body>
        歡迎加入laravel-範例網站，
        <a target='_blank' href='{{ $root }}/member/verifyEmail/{{$member["id"]}}/{{md5($member["email"]. $member["id"])}}'>啟用連結</a>
        <br /> <br />
        歡迎註冊本站
        <br /> <br />
    </body>
</html>
