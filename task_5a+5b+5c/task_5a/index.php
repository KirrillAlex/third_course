<?php
    $result = 0;
    for($i = 1; $i < 101; $i++) {
        $computer = rand(0, 1);
        if ($computer == 1){
            $result += 1;
        }
    }
    if ($result > 50) {
        echo "Сейчас компьютер на $result% оптимист";
    }
    else if ($result < 50) {
        echo "Сейчас компьютер на $result% пессимист";
    }
    else
        echo "Сейчас компьютер на 50% оптимист/пессимист";
?>