<?php 
  $ary1 = ['a', 'b', 'c'];
  $ary2 = ['d', 'e', 'f'];
  $ary3 = array_merge($ary1, $ary2);
  print_r($ary3);
  echo '<br>';
  
  $ary4 = [1, 2, 3, 5, 6, 3, 1, 3, 8];
  $ary5 = array_count_values($ary4);
  print_r($ary5);
  echo '<br>';
  echo $ary5[1];
  echo '<br>';
  $c = 0;
  foreach($ary4 as $num) {
    if($num === 3) {
      $c++;
    }
  }
  print_r($c);
  
  echo '<br>', '-----------q4-----------' . '<br>';
  
  // $sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];
  $sports = ["サッカー", "フットサル", null, null, "バスケ", "野球", "バレー"];
  // 重複した値を削除
  $sp = array_diff($sports, [null]);
  
  print_r($sp);
  
  echo '<br>', '-----------q5-----------' . '<br>';

?>