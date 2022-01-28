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
  

  echo '<br>', '----------------------' . '<br>';
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

  // 配列と繰り返しpart2
  $arry2 = [
    ['table', 1000],
    ['chair', 100],
    ['bed', 10000],
  ];

  //配列の中の、配列の要素を指定
  $arry2[1][1] = 500;

  //指定した配列の一番最初の要素を削除する。
  // array_shift($arry2);

  //指定した配列の一番最後の要素を削除する。
  // array_pop($arry2);

  //指定した配列の、どこから~いくつ削除するか決めることができる。
  //array_splice(指定する配列, どこから, いくつ消すか); どこからは、インデックス番号で指定している
  //array_splice(指定する配列, どこから, いくつ消すか, 新しく挿入する値);
  array_splice($arry2, 1, 1, [['splice', 111]]);
  // print_r($arry2);

  foreach($arry2 as $val) {
    print_r($val) . '<br>';
    echo "{$val[0]}は、{$val[1]}円です。", '<br>';
  }
?>