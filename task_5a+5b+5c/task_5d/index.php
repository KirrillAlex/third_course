<?php
    $pass1 = 268;
    $pass2Se = " ";
    $pass2 = 213;

    $str = strval($pass1);
    $first_pass1 = $str[2];
    $second_pass1 = $str[1];
    $third_pass1 = $str[0];

    $str2 = strval($pass2);
    $first_pass2 = $str2[2];
    $second_pass2 = $str2[1];
    $third_pass2 = $str2[0];
    
    if ($second_pass1 > 5){
        $pass2Se = $third_pass2 . $second_pass2 . $first_pass2;
        echo"Второе цифра из $pass1 > 5, поэтому pass2 = $pass2Se";
    }
    else if ($second_pass1 <= 5){
        $pass2Se = $second_pass2 . $third_pass2 . $first_pass2;
        echo"Второе цифра из $pass1 <= 5, поэтому pass2 = $pass2Se";
    }
?>