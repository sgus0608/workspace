<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op = $_POST['op'];


$result = 0;

if ($op=='+'){
    $result =  $num1 + $num2;
}else if($op=='-'){
    $result =  $num1 - $num2;
}else if($op == '/'){
    $result =  $num1 / $num2;
}else if($op == '*'){
    $result = $num1 * $num2;
}


header('Location:test_result.php?result='.$result);
?>