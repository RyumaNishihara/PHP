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

  //連想配列を使ってみよう。通常の配列と同じ様な操作で問題無い。
  // キー => 値
  $arry3 = [
    'name' => 'Bob',
    'age' => 12,
    'sports' => ['baseball', 'swimming'],
  ];

  //unset()は、連想配列の指定したキーを削除する。
  unset($arry3['name']);
  print_r($arry3). '<br>';
  // echo $arry3['name']. '<br>';
  echo $arry3['age']. '<br>';
  $arry3['age'] += 24;
  echo $arry3['age']. '<br>';
  echo $arry3['sports'][1]. '<br>';
?>