<?php
    $a = 'пять';
    $b = 'восемь';

    switch ($a) {
        case 'ноль':
            $a = 0;
            break;
        case 'один':
            $a = 1;
            break;
        case 'два':
            $a = 2;
            break;
        case 'три':
            $a = 3;
            break;
        case 'четыре':
            $a = 4;
            break;
        case 'пять':
            $a = 5;
            break;
        case 'шесть':
            $a = 6;
            break;
        case 'семь':
            $a = 7;
            break;
        case 'восемь':
            $a = 8;
            break;
        case 'девять':
            $a = 9;
            break;
        default:
            echo "Данные введены неверно";
    }

switch ($b) {
    case 'ноль':
        $b = 0;
        break;
    case 'один':
        $b = 1;
        break;
    case 'два':
        $b = 2;
        break;
    case 'три':
        $b = 3;
        break;
    case 'четыре':
        $b = 4;
        break;
    case 'пять':
        $b = 5;
        break;
    case 'шесть':
        $b = 6;
        break;
    case 'семь':
        $b = 7;
        break;
    case 'восемь':
        $b = 8;
        break;
    case 'девять':
        $b = 9;
        break;
    default:
        echo "Данные введены неверно";
}
    $result = $a + $b;
    if ($result > 10) {
        echo "$result - большое число";
    }
    else {
        echo "$result - маленькое число";
    }
    
?>

