<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Калькулятор вариант 1</h1>
<p>После нажатия кнопки '=' данные передадуться /calculator.php</p>
<pre>
    <form action="/calc.php" method="GET">
        A = <input type="number" name="firstN">
        B = <input type="number" name="secondN">
        <input type="radio" name="oper" value="-">-
        <input type="radio" name="oper" value="+">+
        <input type="radio" name="oper" value="/">/
        <input type="radio" name="oper" value="*">*
        <button type="submit"> = </button>
    </form>
</pre>
</body>
</html>