<?php
//1のコードです
$name = 'miho';
if ($name = 'miho') {
echo '私は'.$name.'です';
echo "\n";
} else {
echo '私は'.$name.'ではありません';
echo "\n";
}

//2のコードです
$total = 0;
for ($i = 1; $i < 10001; $i++) {
$total += $i;
}
echo $total;
echo "\n";

//3のコードです
$fruits = array("apple","banana","pear","kiwi","strawberry"); 
foreach ($fruits as $fruit) {
echo $fruit;
echo "\n";
}    

//4のコードです
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

// 5で割り切れたら{}内を実行する
if($i % 5 == 0){
echo $i;
echo "\n";
  }
}

















?>