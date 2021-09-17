<?php
$testFile = 'test.txt';
$contents = 'こんにちは';

if (is_writable($testFile)) {
  $fp = fopen($testFile,'a');
  fwrite($fp,$contents);
  fclose($fp);
  echo 'finishi writing';
} else {
  echo 'not writeble';
  exit;
}

echo '<br>','<br>';


$test_File = 'test2.txt';

if (is_readable($test_File)) {
  $fp = fopen($test_File,'r');
  while ($line = fgets($fp)) {
    echo $line;
  }
  fclose($fp);
} else {
  echo 'not readable';
  exit;
}
?>