<?php
    $result = 0;
    for($i = 1; $i < 101; $i++){
        $computer = rand(0, 1);
        if ($computer == 1){
            $result += 1;
        }
    }
    echo "Компьютер на $result% оптимист"
?>