<!--Задание 1a-->
<?php
$arr = ['a', 'b', 'c'];
var_dump($arr);
?>

<hr>
<!--Задание 1b-->
<?php
echo "Первый элемент: $arr[0]";
echo "\nВторой элемент: $arr[1]";
echo "\nТретий элемент: $arr[2]";
?>

<hr>
<!--Задание 1c-->
<?php
$arr = ['a', 'b', 'c', 'd'];
$str1 = $arr[0] . '+' . $arr[1];
$str2 = $arr[2] . '+' . $arr[3];

echo $str1 . ', ' . $str2;
?>

<hr>
<!--Задание 1d-->
<?php
$arr = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo $result;
?>

<hr>
<!--Задание 1e-->
<?php
$arr = [];
for ($i = 1; $i < 6; $i++) {
    $arr[$i] = $i;
}
var_dump($arr);
?>

<hr>
<!--Задание 1f-->
<?php
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
echo "Элемент с ключом с: " . $arr['c'];
?>

<hr>
<!--Задание 1g  -->
<?php
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
$sum = 0;
foreach ($arr as $key => $value) {
    $sum += $value;
}
echo "Сумма элеметов:  " . $sum;
?>

<hr>
<!--Задание 1h  -->
<?php
$arr = ['Коля' => '1000$', 'Вася' => '500$', 'Петя' => '200$'];
echo "Зарплата Пети: " . $arr['Петя'];
echo "\nЗарплата Коли: " . $arr['Коля'];
?>

<hr>
<!--Задание 1i  -->
<?php
$week = [1 => 'Понедельник', 2 => 'Вторник', 3 => 'Среда',
    4 => 'Четверг', 5 => 'Пятница', 6 => 'Суббота', 7 => 'Воскресение'];
echo "У меня сейчас " . $week[7];
?>

<hr>
<!--Задание 1j  -->
<?php
$day = 3;
echo "День недели: " . $week[$day];
?>

<hr>
<!--Задание 1k  -->
<?php
$arr = [
    'cms' => ['joomla', 'wordpress', 'drupal'],
    'colors' => ['blue' => 'голубой', 'red' => 'красный', 'green' => 'зеленый']
];

echo $arr['cms'][0] . "\n" . $arr['cms'][2] . "\n" . $arr['colors']['green'] . "\n" . $arr['colors']['red'];
?>

<hr>
<!--Задание 1l  -->
<?php
$lang_week = ['ru' => [1 => 'Понедельник', 2 => 'Вторник', 3 => 'Среда',
    4 => 'Четверг', 5 => 'Пятница', 6 => 'Суббота', 7 => 'Воскресение'],
    'en' => [1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday',
        4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 7 => 'Sunday']];
echo "Первый день недели на русском: " . $lang_week['ru'][1] .
    "\nСреда на английском: " . $lang_week['en'][3];
?>

<hr>
<!--Задание 1m  -->
<?php
$lang = 'ru';
$day = 3;

echo $lang_week[$lang][$day];
?>

<hr>
<!--Задание 1n  -->
<?php
function find_pass ($pass){
    $arr_pass = str_split($pass);
    $result = '';
    for($i = 0; $i < count($arr_pass); $i++){
        for ($j = 0; $j < 10; $j++){
            if ((int)$arr_pass[$i] == $j){
                $result .= $j;
            }
        }
    }
    echo $result;
}

$password = '012786';
find_pass($password);
?>
