<?php
function getCuboidArea($length,$width,$height) {
  $area = $length * $width * $height;
  echo $area,'㎤';
}

getCuboidArea(5,10,8);
?>