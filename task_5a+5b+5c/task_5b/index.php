<?php
    $password = "024012";
    $try_pass = "";

    for ($i = 0; $i < 999999; $i++){
        $zero_num = strlen((string)$i);
        $try_pass = str_repeat('0', 6 - $zero_num) . $i;
        if ($password == $try_pass){
            echo "Password is $try_pass";
            break;
        }
    }
    
?>
