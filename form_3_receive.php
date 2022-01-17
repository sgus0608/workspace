<?php
$fruits = $_POST['fruits2'];


echo "text값은" .$_POST['userName']. "입니다.<br>";
echo "password값은".$_POST['userPw']."입니다<br>";
echo "radio값은" .$_POST['fruits']. "입니다<br>";
echo "checkbox값은";
//.$fruits[0].","."$fruits[1]".","."$fruits[2]". "입니다<br>";
foreach($fruits as $value){
    echo $value.",";
}
echo "입니다<br>";
echo "date 값은".$_POST['date']." 입니다<br>";
echo "textarea 값은".$_POST['text']." 입니다<br>";
echo "hidden값은".$_POST['hiddenValue']."입니다<br>";



//print_r($_POST['fruits2']);