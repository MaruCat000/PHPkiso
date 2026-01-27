<?php
    // 1 1から10までの数字を順番に表示させるプログラムを、for文を用いて作成してください
    $num = 0;

    //for($num <= 10){
    for ($num = 1; $num <= 10; $num++) {
        echo $num;
        echo "\n";  
    }

    // 2 1から50までの数字の合計を表示するプログラムを作成してください
    $num2 = 0;
    $sum = 0;

    for($num2 = 1; $num2 <= 50 ;$num2++){
        $sum += $num2;
    }

    echo $sum;
    echo "\n";

    // 3 1から10までの数字を逆順で表示させるプログラムを作成してください
    $num3 = 0;

    for($num3 = 10 ; $num3 >= 0;$num3--){
        echo $num3;
        echo "\n";
        //$num3--;
    }

?>