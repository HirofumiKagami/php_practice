<?php
$name = "KAGAMIHIROFUMI";
if ($name == "KAGAMIHIROFUMI") {
  echo "私はあなたの名前です";
} else {
  echo "あなたの名前ではありません";
}


$total = 0;
echo $total;

for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;


$fruits = array("apple", "banana", "strawberry", "orange", "peach");

foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}


$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
