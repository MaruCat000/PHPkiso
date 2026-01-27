<?php
    // 1 1から100までの数値で、10の倍数だけを表示するプログラムを作成してください
    $num1 = 0;

    for($num1 = 1; $num1 <= 100 ; $num1++){
        if($num1%10==0){
            echo $num1;
            echo "\n";
        }
    }

    // 2 1から100までの数値で、偶数の数値の合計を出力してください
    $num2 = 0;
    $sum = 0;

    for($num2=1;$num2<=100;$num2++){
        if($num2%2==0){
            $sum += $num2;
        }
    }

    echo $sum;
    echo "\n";


    // 3 1から100までの数値で、条件によって下記の表示をするプログラムを作成してください
    //   3の倍数 -> Fizz、5の倍数 -> Buzz、15の倍数 -> FizzBuzz、それ以外 -> 数字

    $num3 = 0;
    for($num3 = 1;$num3 <= 100 ;$num3++){
        if($num3%3==0){
            echo $num3."は3の倍数";
            echo "\n";
            echo "Fizz";
            echo "\n";
        }else if($num3%5== 0){
            echo $num3."は5の倍数";
            echo "\n";
            echo "Buzz";
            echo "\n";
        }else if($num3%15==0){
            echo $num3."は15の倍数";
            echo "\n";
            echo "FizzBuzz";
            echo "\n";
        }else{
            echo "数字：".$num3;
        }
    }


    // 4 5つの数字の中から最も大きい数字を出力するプログラムを作成してください
    //    組み込み関数を使うのは禁止です

    // 関数を使わず、5つの数字をソートして、最大値を出力する
    // 配列をバブルソートする？
    //$num1 = 10;
    //$num2 = 39;
    //$num3 = 54;
    //$num4 = 3;
    //$num5 = 9;

    function bubble_sort(&$array){
    $size = count($array);
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < ($size - 1 - $i); $j++) {
            if ($array[$j + 1] < $array[$j]) {
                $tmp = $array[$j + 1];
                $array[$j + 1] = $array[$j];
                $array[$j] = $tmp;
            }
        }
    }
    return $array; // これを追加！
}
    
$array = [100, 3, 30, 20, 44, 32];
$kotae = bubble_sort($array);
//echo implode(",", $array).PHP_EOL;
//3,20,30,32,44,100

echo  "最大値は".end($kotae);
echo "\n";



// 5 特定の文字列が回文かどうかを判別するプログラムを作成してください
// 最大と最小が同一かどうかみていく？

$line = "回文判定";
$kotae = ""; // ここを追加！
    for($i=strlen($line);$i>=0;$i--){
    $kotae.=mb_substr($line,$i,1);
    }
    if($kotae==$line){
        echo "YES";
    }else{
        echo "NO";
    }
 
?>