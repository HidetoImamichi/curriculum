<?php
$x = 1.5;
echo ceil($x).'<br>';
echo floor($x).'<br>';
echo round($x).'<br>';

function circleArea($r) {
  $circle_area = $r * $r * pi();
  echo $circle_area;
}
circleArea(2);
echo '<br>';

echo '16d4','(',mt_rand(1,16) * 4,')';
echo '<br>','<br>','<br>';
?>


<?php
echo strlen('やきにく定食');
echo '<br>';
$str = 'yakiniku';
$niku = 'やきにく定食';
echo strpos($str,'i');
echo '<br>';
echo substr($str,-5,3);
echo '<br>';
echo str_replace('やきにく','ひきにく',"$niku"),'<br>','<br>','<br>';
?>


<?php
$name = '今道';
$list_number = 30;
printf('%dの残り時間は%sです',$list_number,$name);
echo '<br>';

// $day = '水';
$date = 15;
$month = 9;
$today = sprintf('今日は%02d月%d日%s曜日です。',$month,$date,'水');
echo $today;
?>


