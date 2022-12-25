<?php

/*
「25行まで講義内容」

// 1-10 までを足した阿智を返す関数
function sum($max){
    
    // result は結果を保存する変数
    $result = 0;
    
    // $i は 1  からはじまり 10 より大きくなるまでループする
    for($i = 1; $i <= $max; $i++){
        
        // $result に $i を順番に足していく
        $result += $i;
    }
    
    // $result を結果として返す(戻り値)
    return $result;
    echo "\n";
}
echo sum(100);
echo "\n";
*/

// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function secound($int){
    $int = $int * 2;
    return $int;
}
echo secound(100);
echo "\n";

// 2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。参考）引数は下記のように指定すると、複数の仮引数を使うことができます
function add($a, $b){
    $c;
    $c = $a + $b;
    return $c;
}
echo add(10, 20);
echo "\n";

// 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
function all_kakezan($arr){
    $sum = 1;
    foreach($arr as $arra){
        $sum *= $arra;
    }
    return $sum;
}
$array = [1, 3, 5 ,7, 9];
echo all_kakezan($array);
echo "\n";

// 4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください

function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  //$max_number = $arr[0];
  
  foreach($arr as $a){
    // ここで配列の中の1番大きい値を探したい
  }

  return $max_number;
}

// 5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください

// ・strip_tags 関数 = htmlタグを取り除く
$str = "<h1>これは見出しです</h1>";
echo strip_tags($str);
echo "\n";

// ・array_push 関数 = 配列の最後に要素を1つ以上追加する
$array = ["PHP", "Java", "Python"];
array_push($array,"javascript", "Go");
foreach($array as $arr){
    echo $arr;
    echo "\n";
}

// ・array_merge 関数 = 1つまたは複数の配列を結合するときに使う
$array1 = [1,2,3];
$array2 = ["一","二","三"];
$array3 = [10,20,30];

$array4 = array_merge($array1,$array2,$array3);
print_r($array4);//配列の中身がみたいの echo は使ってません
echo "\n";

// ・time 関数 = UNIXタイムスタンプ(UTCでの1970年1月1日からの経過時間)を取得
echo "現在のUnixタイムスタンプ：" .time();
echo "\n";

// ・metime 関数 = 指定した日時のタイムスタンプを取得
$time = mktime(12,0,0,12,25,2022); // 変数 = mktime(hour ,minute ,second ,month ,day ,year ,is_dst);
echo $time;
echo "\n";

// ・date 関数 = 指定された日時を任意のフォーマットで日付文字列を返す関数
// 現在日付をフォーマット
echo date("Y/m/d");
echo "\n";

//現在日時をフォーマット
echo date("Y-m-d H:i:s");
echo "\n";
