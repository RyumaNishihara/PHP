
<?php
  /*
  複数行用コメントアウト
  */
  echo 'hello<br>';
  
  //変数定義（重複した値を変数化する）
  $name = 'Bob';
  echo 'hello, ' . $name . '<br>';
  echo 'bye, ' . $name . '<br>';

  $person_name = 'jin';
  echo 'oshiro ' . $person_name . '<br>';

  //文字列の操作
  $a_name = 'Big';
    // . を使って文字列を結合する。
  echo '5hello, ' . $a_name . '<br>';
    /*
      ''と違って""の場合、中で変数を使うことができる。
      文字の間で変数を使いたい場合{}を使う。
      エスケープシーケンスを使うことができる。\n（option + ¥）(改行)
    */
  echo "6hel{$a_name}lo, $a_name\n<br>" . '<br>';

  //自己代入について理解しよう
  //自己代入
  $i = 1;
  $j = 2;
  $i = $i + $j;
  //自己代入演算子
  $i += $j;
    //文字列の場合、文字列として結合する場合。
  $i .= $j;
  echo $i . '<br>';
  //インクリメント演算子 $i = $i + 1
  $i++;
  echo $i . '<br>';

  //データ型について学ぼう
  //データの確認方法 var_dump();
  $b = true;
  $str = 'hello';
  var_dump($b);
  var_dump($str);
  var_dump($i);
  //phpは変数に値を代入した時点で型が決まる。（動的型付け言語）
  //異なる型は、自動的に変換される
    //trueが数値の１に変換されている
  echo $b + $i;
    //明示的に型を指定する
  echo (int)$b + $i . '<br>';

  //条件分岐を作成してみよう
  // || &&
  /*
    条件１
    ５０点未満：不合格
    ５０点以上、７０点未満：合格
    ７０点以上：秀

    条件２
    欠席日数
    5日以上：不合格
  */
  $t = 69;
  $k = 5;
  if($t < 50 || $k >= 5) {
    echo '不合格';
  } else if($t < 70) {
    echo '合格';
  } else {
    echo '秀';
  }

  echo '<br>';
  // == と === の違い (型の比較まで行うか行わないかの違い)
  /*
    falsyな値（if文の条件に単体で使った際、falseな値となる）
    " "（空文字）
    0（数値、文字列）
    NULL
    FALSE
  */
  $var = 0;
  if($var === '0') {
    echo 'true';
  } else {
    echo 'false';
  }

  echo '<br>';

  // ! 否定の論理演算子
  if(!0) {
    echo 'true';
  } else {
    echo 'false';
  }

  echo '<br>';

  //issetとemptyの使い分け（条件分岐と一緒によく使われる）
  //isset：変数が定義されていて、null以外の値の時にtrueを返す。
  $a = 0;
  $b = 1;
  if(isset($a)) {
    echo 'isset: true';
  } else {
    echo 'isset: false';
  }
  
  echo '<br>';

  //empty；issetがfalse、または値がfalsyな時にtrueを返す。(!否定の論理演算子と一緒によく使われる)
  if (!empty($a)) {
    echo 'empty: true';
  } else {
    echo 'empty: false';
  }
?>

<!-- phpモードの外はHTMLの記述ができる -->
<!-- phpプログラムの後にHTMLが続かない場合は、?>の閉じタグをつけない（余分な半角スペースが入ってします）。 -->
