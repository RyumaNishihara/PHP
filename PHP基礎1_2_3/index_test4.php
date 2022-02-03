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

echo '<br>-------------定数を使ってみよう defineについて復習--------------<br>';

/*
  * 定数の使い方
  - define, constでの定義方法。
  - constは、if文や関数の中では使えない。
  - defineでは、グローバルスコープに値が配置される。
  - constは名前空間内に配置される（名前空間のレクチャーで紹介）
*/

// const TAX_RATE = 0.1;

//defined()関数は、既に定数が定義されているか確認する。
if(defined('TAX_RATE')) {
  define('TAX_RATE', 0.1);
}

function with_tax($base_price, $tax_rate = TAX_RATE) {
  $sum_price = $base_price + ($base_price * $tax_rate);
  // round()関数を使うことで(第二引数を省略した場合)、四捨五入できる。
  $sum_price = round($sum_price);
  return $sum_price;
}
$price = with_tax(1000, 0.08);
echo $price;

echo '<br>-------------ファイル分割の方法を学ぼう--------------<br>';
/*
  ファイル分割の方法を学ぼう

  - require, includeの違い
  requireは、エラーが起こったところで処理が止まる。（関数の読み込みに使う）
  includeは、エラーが発生しても最後まで処理が実行される。（最悪なくても問題無いHTMLのテンプレートなどに使われる。）

  require 'ファイル名';
  include 'ファイル名';
  の記述方法も可能。
  
  - require, require_onceの使い方

*/
$arry = [
  'num' => 0,
];

//index_test4_1.phpファイルの読み込み
require('index_test4_1.php');
//使いたい関数を実行する
fn1();

//読み込むとHTMLも表示される。
//読み込むたびに表示される。１回だけ読み込んで欲しい場合は、require_once('ファイル名')を使う。
//他の読み込みは無視される。
require_once('index_test4_2.php');
require_once('index_test4_2.php');
require_once('index_test4_2.php');

echo '<br>-------------パスの書き方について学ぼう--------------<br>';
/*
  - マジック定義 __DIR__, __FILE__を使ってみよう。
  - dirnameの使い方を学ぼう。
  - 相対パスと絶対パス
  - \と/は使い分けよう
  - "と'は使い分けよう
*/

echo __DIR__;
echo '<br>';
echo __FILE__;

echo '<br>-------------名前空間について学ぼう--------------<br>';
/*
  namespace 名前;
*/