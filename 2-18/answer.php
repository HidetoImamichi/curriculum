<link rel="stylesheet" href="style.css">
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];
$port = $_POST['port'];
$lang = $_POST['lang'];
$command = $_POST['command'];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function Answer($answer) {
  if($answer == 80 || $answer == 'HTML' || $answer == 'select') {
  echo '<p class="a_p">正解！</p>';
} else {
  echo '<p class="a_p">残念・・・</p>';
}
}
?>
<p><!--POST通信で送られてきた名前を表示--><?php echo $my_name; ?>さんの結果は・・・？</p>
<p class="a_p">①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php Answer($port); ?>
<p class="a_p">②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php Answer($lang); ?>
<p class="a_p">③の答え</p>
<?php Answer($command); ?>
<!--作成した関数を呼び出して結果を表示-->

