<?php
    $Why = TRUE;
    $small_base = 2;
    $big_base = 8;
    $left_side = 5;
    $right_side = 6;
    $height = 5;
    $differense_base = $big_base - $small_base;

    $check = sqrt(pow($left_side, 2) - pow((pow($differense_base, 2) + pow($left_side, 2) - pow($right_side, 2)) / (2 * $differense_base), 2));


    
    if (round($check) == $height){
        if ($Why == TRUE){
            $s = ($big_base + $small_base) / 2 * $height;
            echo "Площадь: $s";
        }
        else{
            $p = $big_base + $small_base + $right_side + $left_side;
            echo "Периметр: $p";
        }
    }
    else{
        echo"Данные введены неверно!";
    }
?>