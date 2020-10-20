<?php
// 変数　$a に 3 を代入
$a = 3;

$b = 7;

echo $a + $b; 

?>

<?php

$array_month = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月","11月","12月"];

echo $array_month[7];

?>

<?php

$hello = "HELLO";

$name = "KAGAMI HIROFUMI";

$world = "s World!";

echo $hello.$name.$world;

?>

<?php

$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost;

?>

<?php
$array_calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

echo $array_calendar["December"];

?>