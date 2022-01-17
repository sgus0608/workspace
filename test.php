<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="test_receive.php" method="post">
    <label for="num1" id="num1">
        <input type="text" id="num1" name="num1">
    </label>
    <label for="op">
        <select name="op" id="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
    </label>
    <label for="num2" id="num2">
        <input type="text" id="num2" name="num2">
    </label>
    <input type="submit" value="전송">
</form>
</body>
</html>