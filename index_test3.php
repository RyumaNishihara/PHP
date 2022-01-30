<?php 
echo '<br>-------------関数を作ってみよう--------------<br>';
//関数を作ってみよう
/*
  - 特定の機能を使いまわせる様にまとめたもの。
  - Input(引数), Output(戻り値)を設定する。
  - returnが実行された時点でその関数の処理終了。
*/
$numbers = [1,2,3,4];
$numbers2 = [5,6,7];

// $sum = 0;
// foreach($numbers as $num) {
//   $sum += $num;
// }
// echo "合計: {$sum}<br>";

// $sum2 = 0;
// foreach($numbers2 as $num) {
//   $sum2 += $num;
// }
// echo "合計: {$sum2}<br>";
//上記の記述を関数で表現する↓

function sum($nums) {
  $sum = 0;
  foreach($nums as $num) {
    $sum += $num;
  }
  //returnで、この関数を実行した時の結果を返す（戻り値）。
  return $sum;
}

$result = sum($numbers2);
echo "合計: {$result}<br>";
sum($numbers);

echo '<br>-------------関数を作ってみようpart2--------------<br>';
/*
  - デフォルト引数を設定可能
  - 文字列を関数として実行可能
*/

$price = 1000;

function with_tax($base_price, $tax_rate = 0.1) {
  $sum_price = $base_price + ($base_price * $tax_rate);
  // round()関数を使うことで(第二引数を省略した場合)、四捨五入できる。
  $sum_price = round($sum_price);
  return $sum_price;
}

//デフォルト引数なしの呼び出し。
// $price = with_tax($price, 0.1);

//デフォルト引数を設定しての呼び出し。
// $price = with_tax($price);

//第二引数にデフォルト値とは違う引数を渡した場合、デフォルト引数は無視される。
// $price = with_tax($price, 0.08);

//文字列を関数として実行できる。
$fn = "with_tax";
// $price = "with_tax"($price, 0.08);
$price = $fn($price, 0.08);

echo $price;