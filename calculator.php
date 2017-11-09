<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>フォーム入力の処理</title>
</head>

<body>
  <div>
    <form method="POST" action=""> <!-- POSTリクエストするフォーム　-->
      <ul>
        <label>数値A：<input type="number" name="suji1"></label><br> <!--数字を入れるラベルを作って単価と名付ける-->
        <label>数値B：<input type="number" name="suji2"></label><br>
        <!--計算するというボタンを作る　nameにbutton1〜4という名前をつけて区別する。valueがボタンに表記される-->
        <input type="submit" name="button1" value="+">
        <input type="submit" name="button2" value="-">
        <input type="submit" name="button3" value="×">
        <input type="submit" name="button4" value="÷">

      </ul>
    </form>
  </div>
  <div>
  <?php
  //フォームに入力された値をPOSTで得る
    $suji1 = $_POST["suji1"]; //フォームの単価に書かれた項目を$suji1と定義する
    $suji2 = $_POST["suji2"]; //フォームの個数に書かれた項目を$suji2と定義する

  //if文を使ってそれぞれのボタンが押された時の処理を分岐させる
  //isset：変数がセットされていること、NULLでないことを検査する。
  //POST：フォームからデータを受け取る
  if(isset($_POST['button1'])){ //　[button1]が押されたというデータを受け取ったとき
    $result1 = $suji1 + $suji2;
    echo "計算結果は{$result1}です。"; //$result1　という結果を出力する。
    exit;

  } elseif(isset($_POST['button2'])){
    $result2 = $suji1 - $suji2;
    echo "計算結果は{$result2}です。";
    exit;

  } elseif(isset($_POST['button3'])){
    $result3 = $suji1 * $suji2;
    echo "計算結果は{$result3}です。";
    exit;

  } elseif(isset($_POST['button4'])){
    $result4 = $suji1 / $suji2;
    echo "計算結果は{$result4}です。";
    exit;
  }

  ?>
</div>
</body>
</html>
