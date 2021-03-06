<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>じゃんけんアプリ</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/app.css" />
  </head>
  <body>
    <?php
      // 結果を代入する変数
      $result = false;

      // ポスト変数が存在するか
      if (isset($_POST['choice'])) {
        $janken = array(
            'グー',
            'チョキ',
            'パー'
        );

        // エスケープ
        $player = htmlspecialchars($_POST['choice'], ENT_QUOTES, 'UTF-8');

        // 相手の手をランダムで決定
        $com = $janken[array_rand($janken)];

        // 勝敗判定
        //グーの場合
        if ($player === 'グー' && $com === 'チョキ') {
            $result = '<img src="img/win1.png" style="width:400px;">';
        } elseif ($player === 'グー' && $com === 'グー') {
            $result = '<img src="img/hikiwake1.jpeg">';
        } elseif ($player === 'グー' && $com === 'パー') {
            $result = '<img src="img/lose2.jpeg">';
        }
        //チョキの場合
        if ($player === 'チョキ' && $com === 'パー') {
          $result = '<img src="img/win1.png" style="width:400px;">';
        } elseif ($player === 'チョキ' && $com === 'チョキ') {
            $result = '<img src="img/hikiwake1.jpeg">';
        } elseif ($player === 'チョキ' && $com === 'グー') {
            $result = '<img src="img/lose2.jpeg">';
        }
        //パーの場合
        if ($player === 'パー' && $com === 'グー') {
          $result = '<img src="img/win1.png" style="width:400px;">';
        } elseif ($player === 'パー' && $com === 'パー') {
            $result = '<img src="img/hikiwake1.jpeg">';
        } elseif ($player === 'パー' && $com === 'チョキ') {
            $result = '<img src="img/lose2.jpeg">';
        }
      }
    ?>
    <div class="select-form">
      <h1 class="choice">３つの中から一つ選んでください。</h1>

      <form action="" method="post" class="actions">
        <button type="submit" name="choice" value="グー"><img src="img/gu1.jpeg" alt="" ></button>
        <button type="submit" name="choice" value="チョキ"><img src="img/choki1.png" alt="" ></button>
        <button type="submit" name="choice" value="パー"><img src="img/pa1.png" alt="" ></button>
      </form>
    </div>

    <?php if ($result) : ?>
      <p class="result">結果</p>

      <p class="info">
      あなた：<?php echo $player; ?><br>
      あいて：<?php echo $com; ?>
      </p>

      <p class="result"><?php echo $result; ?>です。</p>
    <?php endif; ?>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- js -->
    <script src='js/app.js'></script>
  </body>
</html>
