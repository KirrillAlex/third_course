<?php
function result($data)
{
    $sum_arr = [];
    $sum = 0;
    $temp = 0;

    for ($i = 0; $i < count($data); $i++) {
        for ($j = 0; $j < count($data[$i]); $j++) {
            $sum += $data[$i][$j];
        }
        $sum_arr[] = $sum;
        $sum = 0;
    }

    for ($i = 0; $i < count($sum_arr) - 1; $i++) {
        if ($sum_arr[$i] < $sum_arr[$i + 1]) {
            $temp = $sum_arr[$i];
            $sum_arr[$i] = $sum_arr[$i + 1];
            $sum_arr[$i + 1] = $temp;
        }
    }
    echo "Сумма денег по убыванию: ";
    for ($i = 0; $i < count($sum_arr); $i++) {
        echo $sum_arr[$i] . " ";
    }
}


$bank = [[10000, -17000, -8000, 40000, 17800, -8000], [10000, -5000, 50000],
    [11000, 5500, 7000, 20000, -800], [-10000, 500, -5000, 20000, -8000, -3000, -5000]];
result($bank);
?>
