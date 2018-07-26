<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<body>
<div align="center">
<h1>Авторизация ползователя</h1>
<h4>Для того, чтобы просматривать контент сайта необходимо авторизироваться</h4>
<p style="color: royalblue">Введите логин и пароль</p>

<div align="center">
    <form action="/index.php?id=login" method="post">
        Login: <input name="login"><br><br>
        Password: <input name="password"><br><br>
        <button type="submit">Войти</button>
    </form>
</div></div>
</body>
</html>