<?php
// PHPの研修カリキュラム2-1
?>
<!-- PHPの
研修
カリキュラム
2-1 -->
<html>
  <p>I say that <?php echo 'Hello world!!';?></p>
</html>
<?php
echo "1.開発環境・検証環境・本番環境"."<br>";
echo "開発環境はローカルな環境を利用して動作確認を行うところ。"."<br>";
echo "検証環境は、制作内容に問題がないか検証する環境"."<br>";
echo "本番環境では、普段サイトを閲覧している環境にアップする。"."<br>"."<br>";
echo "2.基本設計書・詳細設計書"."<br>";
echo "基本設計書は、クライアントの意見を受けて、大まかな設計"."<br>";
echo "詳細設計書は、具体的な内容、どういうプログラムを作るかなどの詳細設計。"."<br>"."<br>";
echo "3.Ajax"."<br>";
echo "「Asynchronous JavaScript + XML」の略で、javascriptとXMLを使ってサーバーとの非同期通信を行う技法。"."<br>";
echo "通常の通信と違い、レスポンスを待たずに操作を行うことができるなどのメリットがある。(googleMAPの拡大機能など)";
?>
<?php
echo '<br>'.'<br>'.'<br>';
$message = "やきにく";
var_dump($message);
echo "<br>";
$emp = null;
var_dump($emp);
echo '<br>'.'<br>';
?>
<?php
echo 1+4;
echo '<br>';
echo 10-5;
echo '<br>';
echo 2.5*2;
echo '<br>';
echo 10/2;
echo '<br>';
echo 15%10;
echo '<br>'.'<br>'.'<br>';

$x = '1';
$x++;
echo $x;
echo '<br>';
$x--;
echo $x;
echo '<br>'.'<br>';

$x += 8;
echo $x;
echo '<br>';
$x -= 8;
echo $x;
echo '<br>';
$x *= 9;
echo $x;
echo '<br>';
$x  /= 9;
echo $x; 
echo '<br>';
$x %= 2;
echo $x;
echo '<br>'.'<br>'.'<br>'.'<br>';
?>

<?php
$age = 22;

if ($age >=20 ) {
  echo 'お酒が飲めるぞ';
} else {
  echo 'お酒は二十歳になってから';
}
echo '<br>';
$age = 18;
if ($age >=20 ) {
  echo 'お酒が飲めるぞ';
} else {
  echo 'お酒は二十歳になってから';
}
echo '<br>'.'<br>';
?>

<?php
$live = 'america';
if($live == '本州') {
  echo '本州民';
} elseif($live == '北海道') {
  echo '北海道民';
} elseif($live == '四国') {
  echo '四国民';
} elseif($live == '九州') {
  echo '九州民';
} else {
  echo '外国人';
}
echo '<br>'.'<br>'.'<br>'.'<br>';
?>

<?php
$blood = 'B';
switch($blood) {
case'A':
  print'A型です';
  break;
case'B':
  print'B型です';
  break;
case'O':
  print'O型です';
  break;
case'AB':
  print'AB型です';
  break;
default:
  echo 'A/B/O/ABから選択してください';
}
echo '<br>'.'<br>'.'<br>'.'<br>';
?>

<?php
$name = '今道秀斗';
echo ($name != '') ? "$name" : '名前を入力してください';
echo '<br>'.'<br>'.'<br>'.'<br>';
?>

<?php
// $name = 'taro';
$name = 'jiro';
// $password = 'pass';
$password = 'pasu';
if($name == 'taro' && $password == 'pass') {
  echo 'ログイン成功です';
} elseif($name == 'taro') {
  echo 'パスワードが間違っています。';
} elseif($password == 'pass') {
  echo '名前が間違っています。';
} else {
  echo '入力情報が間違っています。';
}
echo '<br>'.'<br>'.'<br>'.'<br>';
?>

<?php
$num = 0;
while($num < 10) {
  $num++;
  echo $num;
}
echo '<br>';
$num = 0;
do {
   $num++;
   echo $num;
} While($num < 0);
echo '<br>';
for($num = 0; $num < 10; $num++) {
  echo $num;
}
echo '<br>'.'<br>';

// $num = 0;
// while($num <=100) {
//   echo $num;
//   echo '<br>';
//   $num++;
// }

// for($num=0;$num<=100;$num++) {
//   echo $num;
//   echo'<br>';
// }
?>

<?php
$numbers = ['zero','ichi','ni','sann','yonn'];
echo $numbers[4];
echo '<br>';
// var_dump($numbers);
// echo '<br>';

$fruits = ['orange' => 'みかん','grape' => 'ぶどう','apple' => 'りんご'];
echo $fruits['grape'];
echo '<br>';
$numbers[5] = 'go';
$numbers[] = 'roku';
// var_dump($numbers);
echo '<br>';
$fruits['peach'] = 'もも';
var_dump($fruits);
echo '<br>';
?>

<!-- 課題練習 -->
<?php
$colors = ['red' => '赤','blue' => '青','green' => '緑'];
var_dump($colors);
echo '<br>';
$colors['yellow'] = '黄色';
var_dump($colors);
?>