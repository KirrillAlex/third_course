<?php
$i++;
$newfunc = create_function('$a,$b', 'return "ln($a) + ln($b) = " . log($a * $b);');
trigger_error("Fatal error", E_USER_ERROR);
?>
