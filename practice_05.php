<?php

//１
$name = "TakuyaIkeshima";
if ($name == "TakuyaIkeshima"){
    $name .= " です";
    echo "私は ";
    echo $name;
}else {
    $name .= " ではありません";
    echo "私は ";
    echo $name;
}
echo "\n";


//２
$sum_2;
for($i = 1; $i <= 10000; $i++ ){
    $sum_2 += $i;
}
echo $sum_2;
echo "\n";

//３
$fruits = ["apple", "banana", "grapefruit", "kiwi", "lemon"];
foreach($fruits as $fruits){
    echo $fruits;
    echo "\n";
}
echo "\n";


//４ (5で割り切れたら{}内を実行する)
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
echo "\n";