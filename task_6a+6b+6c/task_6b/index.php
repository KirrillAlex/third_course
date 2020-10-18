<?php
$price = 16420;

$price += round($price * 0.13);
$rub = intdiv($price, 100);
$penny = $price % 100;

$temp = (string)$rub;
$temp1 = (string)$penny;
switch ($temp[strlen($temp) - 1]) {
    case 1:
        $string1 = "рубль";
        break;
    case 2:
    case 3:
    case 4:
        $string1 = "рубля";
        break;
    default:
        $string1 = "рублей";
        break;
}

switch ($temp1[strlen($temp1) - 1]) {
    case 1:
        $string2 = "копейка";
        break;
    case 2:
    case 3:
    case 4:
        $string2 = "копейки";
        break;
    default:
        $string2 = "копеек";
        break;
}
echo "Стоимость: ".$rub." ".$string1." ".$penny." ".$string2;
echo "\nСтоимость: ".$rub.".".$penny."руб";

?>