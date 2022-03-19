<?php 
  $num1 = $_GET['num1'];
  $num2 = $_GET['num2'];
  $num3 = $_GET['num3'];
  $num4 = $_GET['num4'];
  
  $media = ($num1 + $num2 + $num3 + $num4)/4;
  
  echo "Média: $media";
 ?>