<?php
$arr = ["Петя" => 12000, "Коля"=> 34000, "Иван" => 10000];
$sum = 0;
foreach ($arr as $key => $value) {
    $sum += $arr[$key];
}
echo $sum;