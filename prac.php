<?php
//1のコードです
function mult($max) {
    $result = 0;

    for ($i = 1; $i <= $max; $i++){
    $result = $i*2;   
    }
return $result;
}
echo mult(1);
echo "\n";

//2のコードです
function add($a,$b) {
   $result = $a + $b; 
   return $result;
}
echo add(1,9);
echo "\n";

//3のコードです
function total($arr) {
    $result = 1;
    foreach ($arr as $number) {
        $result *= $number;
    }
    return $result;
}
echo total(array(1,3,5,7,9,));
echo "\n";

//4のコードです
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
 //どうしたらいいかわからない・・・・
    if ($max_number < $a) {
     $max_number = $a;
    }
  }
 return $max_number;
 }
echo max_array(array(6,7,8,12,0));
echo "\n";

//5のコードです
//strip_tags => タグを取る
$name = "<h1>Hello</h1>";
$result = strip_tags($name);
echo $result;
echo "\n";

//array_push =>配列の末尾にデータを追加する
$data = array(1,2,3,4);
array_push($data,5,6);
print_r($data);
echo "\n";

//array_merge =>配列の追加
$data = array(1,2,3,4);
$add = array(5,6,7,8);
$result = array_merge($data,$add);
print_r($result);
echo "\n";

//time, mktime =>現在のタイムスタンプ取得、指定した日時のタイムスタンプの取得
$now = time();
echo $now;
echo "\n";

$time = mktime(1,1,1,1,1,2021);
echo $time;
echo "\n";

//date =>
$time = time();
$time_1 = date('Y年m月d日H時間i分s秒.$time');
echo $time_1;
echo "\n";



















?>