<?php
    $password = "022222";
    $flag = false;

    for ($i = 100000; $i < 999999; $i++){
        if($i == (int)($password)){
            echo "Пароль: $i";
            $flag = true;
            break;
        }
        else {
            $flag = false;
        }
    }
    if ($flag == false){
        for ($i = 100000; $i < 999999; $i++){
            $temp1 = "0".intdiv($i, 10);
            $temp2 = "00".intdiv($i, 100);
            $temp3 = "000".intdiv($i, 1000);
            $temp4 = "0000".intdiv($i, 10000);
            $temp5 = "00000".intdiv($i, 100000);
            if ($password == $temp1){
                echo "Пароль: $temp1";
                break;
            }
            if ($password == $temp2){
                echo "Пароль: $temp2";
                break;
            }
            if ($password == $temp3){
                echo "Пароль: $temp3";
                break;
            }
            if ($password == $temp4){
                echo "Пароль: $temp4";
                break;
            }
            if ($password == $temp5){
                echo "Пароль: $temp5";
                break;
            }
            if($password == "000000"){
                echo "Пароль: 000000";
                break;
            }
        }
    }
?>
