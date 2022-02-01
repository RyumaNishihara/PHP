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

echo '<br>-------------PHPDocを書いてみよう（見返す）--------------<br>';
// PHPDocの書式を使ったコメントの入れ方
/*
* ファイルの先頭に、このファイルが何をするためのファイルなのか記述することで、
他の開発者が見てわかりやすい様にする。

*/

echo '<br>-------------スコープについて理解しよう--------------<br>';
/*
* スコープ：変数が参照可能な範囲。
// グローバルスコープ
// ローカルスコープ
// スーパーグローバル $_SERVER
*/

// グローバルスコープ
$a = 1;

function fn1() {
  //ローカルスコープ
  $b = 2;

  //グローバルスコープの変数をローカルスコープの中で使う場合
  global $a;
  echo $a;
}

fn1();

echo '<br>-------------関数とスコープ、理解度チェック--------------<br>';

/*
問１：生徒の点呼をとる関数(tenko)
以下のような点呼をとりましょう。
 
```
（出席しているとき）
taroは出席しています。
（欠席しているとき）
taroは欠席しています。
```
$is_absentのデフォルト引数はfalseとしてください。
 
@param string $student 生徒
@param bool $is_absent true:欠席 false:出席
@return void

*/

function tenko($student, $is_absent = false) {
  if($is_absent) {
    echo "{$student}は欠席しています。";
  } else {
    echo "{$student}は出席しています。";
  }
}
$student = 'taro';
tenko($student);

$student = 'jiro';
tenko($student);

$student = 'hanako';
tenko($student, true);

echo '<br>';
/*
 
問２：カウンター関数(counter)
 
グローバルスコープに定義された $num に対して、
引数でわたってきた $step を足し合わせた数値を
$num に再び格納して、画面に出力するプログラムを作成してください。
$stepのデフォルト引数は 1 としてください。
 
@global int $num 足し合わせる元となる数値
@param int $step 足し合わせる数値
@return int 合計値 ($num + $step)

*/

function counter($step = 1) {
  global $num;
  $num += $step;
  echo $num . '<br>';
  return $num;
}
//グローバル変数に対して関数内で設定した値というのは、ずっと保持される状態となる。
$num = 0;

counter(2);
counter(2);
counter(2);