<?php
    $pass1 = 238;
    $pass2Se = 123;
    $pass2 = " ";

    $str = strval($pass1);
    $first_pass1 = $str[2];
    $second_pass1 = $str[1];
    $third_pass1 = $str[0];

    $str2 = strval($pass2Se);
    $first_pass2Se = $str2[2];
    $second_pass2Se = $str2[1];
    $third_pass2Se = $str2[0];
    
    if ($second_pass1 > 5){
        $pass2 = $first_pass2Se.$second_pass2Se.$third_pass2Se;
        echo"Второе цифра из $pass1 > 5, поэтому pass2 = $pass2";
    }
    else if ($second_pass1 <= 5){
        $pass2 = $second_pass2Se.$third_pass2Se.$first_pass2Se;
        echo"Второе цифра из $pass1 <= 5, поэтому pass2 = $pass2";
    }

?>