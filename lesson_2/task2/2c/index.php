<?php
function isPrime($number)
{
    if ($number == 2)
        return true;
    if ($number % 2 == 0)
        return false;
    $i = 3;
    $max_factor = (int)sqrt($number);
    while ($i <= $max_factor) {
        if ($number % $i == 0)
            return false;
        $i += 2;
    }
    return true;
}

function filtration($range)
{
    $simple_num = [];
    $another = [];
    $flag = false;

    for ($i = $range[0]; $i < $range[1] + 1; $i++) {
        if ($i == 1){
            $flag = true;
        }
        else if (isPrime($i)) {
            $simple_num[] = $i;
        } else {
            $another[] = $i;
        }
    }


    echo "Простые числа: \n";
    for ($i = 0; $i < count($simple_num); $i++) {
        echo $simple_num[$i] . " ";
    }
    echo "\nЧисла, не являющееся простыми: \n";
    for ($i = 0; $i < count($another); $i++) {
        echo $another[$i] . " ";
    }
}


$range = [1, 10];
filtration($range);

?>
