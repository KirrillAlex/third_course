<?php
    $a = 'пять';
    $b = 'восемь';

    $num_mass = ['ноль', 'один', 'два', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять'];

    if (in_array($a, $num_mass) && in_array($b, $num_mass)){
        $a = array_search($a, $num_mass);
        $b = array_search($b, $num_mass);
    }
    else{
        echo "Данные введены неверно!";
    }

    $result = $a + $b;
    if ($result < 10){
        echo"Результат: $result - маленькое число";
    }
    else {
        echo"Результат: $result - большое число";
    }
    
?>