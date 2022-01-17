<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>구구단</title>
</head>
<body>
<h1>사용자가 원하는 구구단 출력하기</h1>
<br>
<h3>구구단을 보고 싶은 숫자를 입력하고 전송해보세요</h3>
<form action="gugudan.php" method="get">
    <input type="text" name="dan">
    <input type="submit" value="전송">
</form>

<div><?php echo isset($_GET['dan']) ? $_GET['dan'] : ""?></div>
</body>
</html>