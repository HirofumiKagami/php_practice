<?php
$name = "KAGAMIHIROFUMI";

if ($name = "KAGAMIHIROFUMI") {
  echo "私はあなたの名前です";
} else {
  echo "あなたの名前ではありません";
}
?>

<?php
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
?>

<?php
$fruits = array("apple", "banana", "strawberry", "orange", "peach");

foreach($fruits as $fruits){
    echo "要素は" . $fruits;
    echo "_n";
}
?>

<?php
$start = 1;
$end = 100;
for($i = $start; $i < $end; $i++){

if($i % 5 == 0){
    echo $i;
  }
}
?>