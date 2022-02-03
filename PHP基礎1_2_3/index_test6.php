<?php declare(strict_types=1);
//データ型の記述をする際、厳密に検査するモードに移行する。declare(strict_types=1);
echo '<br>-------------データの方宣言とstrictモード--------------<br>';

//(int $val)とすることで、$valに整数値以外が渡ってきた時エラーになる。
// : int とすることで、returnの戻り値が整数値でないとエラーになる。
function add1(int $val): int {
  return $val + 1;
}
$result = add1(1);
var_dump($result);