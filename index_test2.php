<?php 
  //配列と繰り返し
  // $arry = array('taro', 'hanako', 'jito'); 配列をこの様に定義することもできる。
  $arry = ['taro', 'hanako', 'jiro'];
  //配列の型を画面上に表示するために、print_rを使う
  print_r($arry);
  echo '<br>';
  var_dump($arry);
  echo '<br>';
  echo $arry[0] . '<br>';
  echo $arry[1] . '<br>';
  echo $arry[2] . '<br>';
  //配列の特定の要素の変更
  $arry[1] = 'toireno-hanako';
  echo $arry[1] . '<br>';
  print_r($arry);
  echo '<br>';
  //配列に値の追加
  $arry[] = 'saburo';
  print_r($arry);
  echo '<br>';

  //繰り返し処理
  echo '--------for--------';
  //for
  //count()を使うことで、配列の中の要素数が入る。
  for($i = 0; $i < count($arry); $i++) {
    // . じゃなくて , で連結してもOK
    echo '<div>', $arry[$i], '</div>';
  }
  
  echo '--------foreach--------';
  //foeach (as：かわりに)
  foreach($arry as $v) {
    echo '<div>', $v, '</div>';
  }

  echo '--------foreachインデックス番号付き--------';
  foreach($arry as $i => $v) {
    echo '<div>', $i, ': ', $v, '</div>';
  }

?>