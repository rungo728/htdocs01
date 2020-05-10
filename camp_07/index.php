<?php 
  // phpの記述できる領域になります
  echo "<p>"."はじめてのphp"."</p>";
  echo "<p>"."5 + 7"."</p>"; //わざとエラーをだしてその画面をみてます
  echo 5 + 7;
  $apple = "りんご";
  $num = 10 + 10;
  echo $apple."<br>";
  echo $num."<br>";

  $a = 1;
  $b = 2;

  if ($a === 1){
    echo "１が表示されました"."<br>";
  } 
  
  if ($b === 2){
    echo "２が表示されました"."<br>";
  }
  // 関数＝ランダムな数字がでるものを体験してみよう！
  $random = mt_rand(1,6);
  // 今$randomに関数を使ってランダムな数字が収納されている状態です
  // 確認は必ず「ブラウザをリロード」して確かめましょう！
  echo $random;

  // おみくじに書き換えてみましょう！
  if($random == 1){
    // 大吉
    echo "大吉";
  }else if($random == 2){
    // 中吉
    echo "中吉";
  }else if($random == 3){
    // 小吉
    echo "小吉";
  }else if($random == 4){
    // 吉
    echo "吉";
  }else if($random == 5){
    // 末
    echo "末";
  }else if($random == 6){
    // 凶
    echo "凶";
  }
?>