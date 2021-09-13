<?php
$numbers = 1;
while ($numbers <= 100) {
  if ($numbers%3 == 0 && $numbers%5 == 0) {
    echo 'FizzBuzz!';
    echo '<br>';
    $numbers++;
  } elseif ($numbers%3 == 0) {
    echo 'Fizz!';
    echo '<br>';
    $numbers++;
  } elseif ($numbers%5 == 0) {
    echo 'Buzz!';
    echo '<br>';
    $numbers++;
  } else {
    echo $numbers;
    echo '<br>';
    $numbers++;
  }
} 
?>