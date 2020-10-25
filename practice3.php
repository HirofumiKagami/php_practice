<?php
//関数名をmultiとし、仮引数を$iとする

function multi($i) {
//数字を2倍にする関数

return $i*2;
}
echo multi(9);
?>

<?php
//関数名をsumとし、仮因数を$a,$bとする
function sum($a, $b){
// 2要素を足し合わせる関数
return $a + $b;
}
echo sum(1, 2);
?>

<?php

function product($arr) {
    $result = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
    $result *= $arr[$i];
}
return $result;
}
echo product(array(1,3,5,7,9));
?>

<?php

function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
 if($max_number < $a){
         $max_number = $a;
 }
 }
 return $max_number;
 }
 
 echo max_array(array(1,10,100,1000,10000));
?>


<?php
$text = '<p>HTMLタグやPHPタグを取り除く.</p><a>1234</a>';
echo strip_tags($text);
?>

<?php
// 配列を定義
$array = ["配列に", "要素を"];

// 配列に要素を追加
$array2= array_push($array, "追加する");

// 要素追加後の配列を出力
echo $array2;
?>

<?php

$array01 = ["配列同士を","マージする"];
$array02= ["追加する配列の要素", "これも追加"];
var_dump(array_merge ($array01, $array02));

?>


<?php
//timem関数についての課題。ここでは現在のタイムスタンプを取得
//通常は「現在のタイムスタンプ」などどコメントし、echo 'コメント:' .time()を入力して現在のタイムスタンプを得る
echo 'time関数とは、UNIXタイムスタンプを取得することができる関数：'.time();
 //ここで改行
echo '<br>';
 
//3日後のタイムスタンプを取得。24時間を3日分とし、それに60分と60秒をかけて、秒単位に単位換算する
$nweek = time() + (3 * 24 * 60 * 60);
echo 'UNIXタイムスタンプとは、コンピューターのシステム時刻の一種で、
協定世界時（UTC）での1970年1月1日（午前0時0分0秒）からの経過時間のこと：'.$nweek;
?>

<?php

// デフォルトのタイムゾーンを設定します。
date_default_timezone_set('UTC');

// 出力: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
echo '<br>';

// 出力例: 2006-04-05T01:02:03+00:00
echo date('c', mktime(1, 2, 3, 4, 5, 2006));
?>

<?php
// タイムゾーンを設定.（PHPのdate関数は、日時を指定の表記にフォーマットして出力する関数。）
date_default_timezone_set('Asia/Tokyo');
// UNIXタイムスタンプ（現在時刻）
echo time()."\n";
// 現在日時をフォーマットする
echo date('Y-m-d H:i:s')."\n";
echo date('Y年m月d日 H時i分s秒')."\n";
?>

