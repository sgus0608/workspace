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
test;
    <table border="1px">

        <?php
            for ($i=0;$i<=9;$i++){
                echo "<tr>";
                for ($j=$i*10;$j<=$i*10+9;$j++){
                    echo "<td>$j</td>";
                }
                $j += 1;
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>