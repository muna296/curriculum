<?php
  //count(要素を数を数える)
  $members = ["tanaka", "sakai", "kimura", "yoshida", "uchida"];
  echo count($members);
?>
<br>
<?php
  //sort(要素の並べ替え)
  $members = ["tanaka", "sakai", "kimura", "yoshida", "uchida"];
  sort ($members);
  var_dump($members);
?>
<br>
<?php
  //in_array(配列に中にある要素が存在しているか)
  $members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
  if (in_array("tanaka", $members)) {
    echo "田中さんがいるよ！";
  } else {
    echo "田中さんはいないよ！";
  }
?>
<br>
<?php
  //implode(配列を結合して文字列に変換)
  $members = ["tanaka", "sasaki", "kimura", "yoshida", "uchida"];
  $atstr = implode("@", $members);
  var_dump($atstr);
?>
<br>
<?php
  //explode(文字列を指定の区切りで配列にする)
  $members = ["tanaka","sasaki","kimura","yoshida","uchida"];
  $atstr = implode("@", $members);

  $re_members = explode("@",$atstr);
  var_dump($re_members);
?>
