<?php

$num1 = $_POST['num1'];
$op = $_POST['op'];
$num2 = $_POST['num2'];

// 계산
$result = 0;


if ($op=='+'){
    $result = $num1 + $num2;

}else if($op=='-'){
    $result = $num1 - $num2;

}else if($op == '*'){
    $result = $num1 * $num2;

}else if($op == '/'){
    $result = $num1 / $num2;
}

$url = "form_calc_result.php?result=".$result;

header('Location:'.$url);

?>


