<?php
$i = 0;
$count = 0;

  while($i < 40) {
    $count++;
    $dice = 0;
    $dice = mt_rand(1,6);
    echo $count,'回目=',$dice;
    $i = $i + $dice;
    echo '<br>';
  }
  echo '合計',$count,'回でゴールしました。';
  echo '<br>','<br>','<br>';
?>

<?php
$hour = date('H',time());
// $hour = ;

  if ($hour >= 5 && $hour < 12) {
    echo "今{$hour}時台です<br>おはようございます。";
  } else if ($hour >= 12 && $hour < 17) {
    echo "今{$hour}時台です<br>こんにちは。";
  } else {
    echo "今{$hour}時台です<br>こんばんは";
  }
?>