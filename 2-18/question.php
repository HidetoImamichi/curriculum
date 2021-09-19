<link rel="stylesheet" href="style.css">
<?php
// POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。

//② ①で作成した、配列から正解の選択肢の変数を作成してください

?>

<p>お疲れ様です<?php echo $my_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="POST" class="q_form">
  <input type="hidden" name="my_name" value="<?php echo $my_name ?>">
  <h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php 
    $port = [80,22,20,21];
    foreach ($port as $value) {
      $Port = "<input type='radio' name='port' required='required' value = $value>".$value;
      echo $Port;
    }
    ?>

  <h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php 
    $lang = ['PHP','Python','JAVA','HTML'];
    foreach ($lang as $value) {
      $Lang = "<input type='radio' name='lang' required='required' value = $value>".$value;
      echo $Lang;
    }
    ?>
  <h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php 
    $command = ['join','select','insert','update'];
    foreach ($command as $value) {
      $Command = "<input type='radio' name='command' required='required' value = $value>".$value;
      echo $Command;
    }
    ?>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<br>
<input type="submit" value="回答する">
</form>