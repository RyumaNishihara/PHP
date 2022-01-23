
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
  echo "6hel{$a_name}lo, $a_name\n";
?>

<!-- phpモードの外はHTMLの記述ができる -->
<!-- phpプログラムの後にHTMLが続かない場合は、?>の閉じタグをつけない（余分な半角スペースが入ってします）。 -->
