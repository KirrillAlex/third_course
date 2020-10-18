<?php
$ip = 3232235777;

if (is_numeric($ip)) {
    $part[0] = (int)($ip / 256 / 256 / 256);
    $part[1] = (int)(($ip - $part[0] * 256 * 256 * 256) / 256 / 256);
    $part[2] = (int)(($ip - $part[0] * 256 * 256 * 256 - $part[1] * 256 * 256) / 256);
    $part[3] = $ip - $part[0] * 256 * 256 * 256 - $part[1] * 256 * 256 - $part[2] * 256;
    $ip = "$part[0].$part[1].$part[2].$part[3]";
} else {
    $numb = explode(".", $ip);
    $ip = $numb[0] * 256 * 256 * 256 + $numb[1] * 256 * 256 + $numb[2] * 256 + $numb[3];
}
echo $ip;

?>

