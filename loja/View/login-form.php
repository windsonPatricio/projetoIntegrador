<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="Designer/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Designer/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="Designer/css/styles.css">
</head>

<body style="height: 100% width=100%;">
    <div class="login-dark" style="height: 700px;color: rgb(34,41,33);background-image: url(&quot;Designer/img/page1.jpg&quot;);width: 1350px;">
        <form action="/login" method="post" style="background-color: rgba(6,5,5,0.21);">
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="email" style="background-color: #171010;" required autofocus>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="senha" placeholder="senha" style="background-color: #171010;" required>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(33,48,128);">Log In</button>
            </div>
        </>
    </div>
    <script src="Designer/js/jquery.min.js"></script>
    <script src="Designer/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>