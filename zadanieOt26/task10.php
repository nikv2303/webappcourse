<?php
$num = rand(0,59);
if($num <= 15)echo $num." - Первая четверть";
else if($num <= 30)echo $num." - Вторая четверть";
else if($num <= 45)echo $num." - Третья четверть";
else if($num <= 60)echo $num." - Четвёртая четверть";

?>