<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Калькулятор</title>
</head>
<body>
<h1>Калькулятор вариант 1</h1>
<form action="/calc.php" method="GET">
    X = <input type="text" name="x" ><br>
    Y = <input type="text" name="y" ><br>
    <input type="radio" name="oper" value="minus">-
    <input type="radio" name="oper" value="plus">+
    <input type="radio" name="oper" value="div">/
    <input type="radio" name="oper" value="mult">*<br>
    <button type="submit">равно</button>
</form>
</body>
</html>