<?php
    $password = 437895;
    

    for($i = 0; $i < 999999; $i++){
        if($i == $password){
            echo "Пароль: $i";
            break;
        }
    }
?>