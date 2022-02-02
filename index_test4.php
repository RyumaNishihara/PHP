<?php 
echo '<br>-------------PHPの基礎part3--------------<br>';
echo '<br>-------------プログラムの記述順には注意しよう--------------<br>';
/*
  * 関数内の処理は関数が実行されて初めて動く
  * 関数宣言はプログラムの実行よりも前に準備される。
  * それ以外は上から順に実行される
*/
//関数宣言はプログラムの実行よりも前に準備される。
counter();

function counter($step = 1) {
  global $num;
  $num += $step;
  echo $num;
  return $num;
}

//関数内の処理は関数が実行されて初めて動く
$num = 0;
counter(2);

echo '<br>-------------条件分岐を省略して記述してみよう--------------<br>';

/*
  * 三項演算子の使い方
  * null合体演算子
*/
$arry = [
  'key' => 10,
];

$arry2 = [
  'key' => 20,
];

// if(isset($arry['key'])) {
//   $arry['key'] *= 10;
// } else {
//   $arry['key'] = 1;
// }

//三項演算子
$arry['key'] = isset($arry['key']) ? $arry['key'] *= 10 : 1;
echo $arry['key'] . '<br>';

//null合体演算子（入ってきた値がnullだったら1を返すという式になっている。）
$arry2['key'] = $arry2['key'] ?? 1;
echo $arry2['key'] . '<br>';