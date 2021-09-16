<?php
$week = ['日','月','火','水','木','金','土'];

echo count($week);
echo '<br>';

sort($week);
var_dump($week);
echo '<br>';

if (in_array('日',$week)) {
  echo '休みがある'; 
} else {
  echo '休みなし';
}
echo '<br>';

$week = ['日',',月',',火',',水',',木',',金',',土',''];

$youbi = implode('曜日',$week);
var_dump($youbi);
echo '<br>';

$re_week = explode('曜日',$youbi);
var_dump($re_week);
?>