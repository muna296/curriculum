<?php
  //ceil
  $x = 5.5;
  echo ceil($x);
?>
<br>
<?php
  //floor
  $x = 5.5;
  echo floor($x);
?>
<br>
<?php
  //round(四捨五入)
  $x = 6.9;
  $y = 6.3;
  echo round($x);
  echo '<br>';
  echo round($y);
?>
<br>
<?php
  //pi（円周率）
  echo pi();
  echo "<br>";

  function circleArea($r){
      $circle_area = $r * $r * pi();
      echo $circle_area;
  }
  //半径が５の円の面積の計算
  circleArea(5);
?>
<br>
<?php
  //mt_rand(乱数)
  echo mt_rand(1,1000);
?>
<br>
<?php
  //strlen（文字列の長さ）
  $str = "hagehagehage";
  echo strlen($str);
?>
<br>
<?php
//strpos（検索）
  $str = "yesterday";
  echo strpos($str, "e");
?>
<br>
<?php
  //substr （文字列の切り取り）
  $str = "yesterday";
  echo substr($str, -2, 3);
?>
<br>
<?php
  //str_replace(置換)
  $str = "yesterday";
  echo str_replace("day","DAY",$str);
?>
<br>
<?php
  //printf(フォーマット化した文字列を出力)
  $name = "高木さん";
  $limit_number = 25;
  printf("%sの残り時間はあと%03dです。",$name,$limit_number);
?>
<br>
<?php
  //sprintf（変数に代入できるprintf）
  $limit_hour = 1;
  $limit_minute = 20;
  printf("残り%02d時間%02d分", $limit_hour, $limit_minute);

  $limit_time = sprintf("残り%01d時間%01d分", $limit_hour, $limit_minute);
  echo $limit_time;
?>