<?php

//１
$name = "TakuyaIkeshima";
if ($name == "TakuyaIkeshima"){
    echo "私は あなたの名前 です";
}else {
    echo "あなたの名前ではありません";
}
echo "\n";

//２
for($i = 1; $i <= 10000; $i++ ){
    $i += $i;
}
echo $i;
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