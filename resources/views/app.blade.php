<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'クライアント証明書管理ツール')</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap-social.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/top.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="title">NIJIBOX<br />Client Certificate</div>
            <p class="sub">
            ニジボックス従業員が個人のクライアント証明書を発行するためのサイトです。<br />
            ログインはニジボックスのGoogle Appアカウントのみ、下のログインボタンで認証を行います。
            </p>
        </div>
        <hr />
        <div class="content">
            <a href="#" class="btn btn-block btn-social btn-lg btn-google"><span class="fa fa-google"></span>Login with Google</a>
        </div>
    </div>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/scripts.js"></script>
</body>
</html>