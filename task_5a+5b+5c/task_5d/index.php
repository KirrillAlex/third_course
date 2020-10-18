<?php
    $pass1 = 208;
    $pass2Se = 813;
    $pass2 = " ";

    $str = strval($pass1);
    $first_pass1 = $str[2];
    $second_pass1 = $str[1];
    $third_pass1 = $str[0];

    $str2 = strval($pass2Se);
    $first_pass2Se = $str2[2];
    $second_pass2Se = $str2[1];
    $third_pass2Se = $str2[0];
    
    if ($second_pass1 + $second_pass2Se > 2){
        $new1 = (int)$first_pass2Se + 1;
        $new2 = (int)$second_pass2Se + 1;
        $new3 = (int)$third_pass2Se + 1;
        $pass2 = (string)$new1.(string)$new2.(string)$new3;
        echo"Сумма вторых цифр > 2, поэтому pass2 = $pass2";
    }
    else if ($second_pass1 + $second_pass2Se <= 2){
        $new1 = (int)$first_pass2Se - 1;
        $new2 = (int)$second_pass2Se - 1;
        $new3 = (int)$third_pass2Se - 1;

        if ($new1 < 0) $new1 = abs($new1);
        if ($new2 < 0) $new2 = abs($new2);
        if ($new3 < 0) $new3 = abs($new3);
        $pass2 = (string)$new1.(string)$new2.(string)$new3;
        echo"Сумма вторых цифр <= 2,, поэтому pass2 = $pass2";
    }

?>