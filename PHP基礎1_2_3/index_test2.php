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

  //配列、理解度チェック
  //問１
  $products = [
    'table' => [1000, 2],
    'chair' => [500, 4],
    'bed' => [10000, 1],
    'light' => [5000, 1],
  ];
  echo '<div>商品一覧</div>';
  foreach($products as $key => $val) {
    echo "<div>{$key}は、{$val[0]}円で、{$val[1]}個存在します。</div>";
  }

  //問2
  $cart = [
    'table' => 1,
    'bed' => 2,
  ];
  echo '<div>商品購入</div>';
  foreach($cart as $key => $val) {
    echo "<div>{$key}を、{$val}個ください。</div>";

    $p_num = $products[$key][1];

    if($val <= $p_num) {
      echo 'はい、ありがとうございます。';
    } else {
      echo "すみません。{$key}は、{$p_num}個しかありません。";
    }
  }

  echo '<br>-------------正規表現--------------<br>';
  //正規表現を使ってみよう
  /*
    正規表現とは、文字列のパターンを表現するための方法。

    よく使う表現
    . 任意の1文字
    * ０回以上の繰り返し
    + １回以上の繰り返し
    {n} n回の繰り返し
    [] 文字クラスの作成
    [abc] aまたはbまたはc
    [^abc] aまたはbまたはc 以外
    [0-9] 0~9まで
    [a-z] a~zまで
    $ 終端一致
    ^ 先端一致
    \w 半角英数字とアンダースコア
    \d 数値
    \ エスケープ
    () 文字列の抜き出し
  */

  $char = 'aAabd1_sscc';
  //preg_match("/検索したい文字列/", 検索対象の文字列, 第三引数に結果が渡ってくる)
  //基本、１記号1文字を対象としている。
  if(preg_match("/[a-zA-Z]{1,2}/i", $char, $result)) {
    echo '検索成功';
    //正規表現を使う際は、結果をprint_r()で調べる様にする。
    print_r($result);
  } else {
    echo '検索失敗';
  }
  echo '<br>-------------正規表現、理解度チェック--------------<br>';
  /*
    １．郵便番号
    以下のパターンでOK、NGとなるように
    正規表現を記述してみてください。

    001-0012 -> OK
    001-001 -> NG
    2.2-3042 -> NG
    wd3-2132 -> NG
    124-56789 -> NG
  */
  $zipcode = '001-00122';
  if(preg_match("/^\d{3}-\d{4}$/", $zipcode, $result)) {
    echo '正しい郵便番号です。';
    print_r($result);
  } else {
    echo '郵便番号が不正です。';
  }
  echo '<br>';
  /*
    ２．Email
    以下のパターンでOK、NGとなるように
    正規表現を記述してみてください。
    
    example000@gmail.com -> OK
    example-0.00@gmail.com -> OK
    example-0.00@ex.co.jp -> OK
    example/0.00@ex.co.jp -> NG
    . _ - と半角英数字が可能
  */
  $email = 'examp/le000@gmail.com';
  // - は、クラス表記の中では特殊な記号になるため、\をつける。
  if(preg_match("/^[\w.\-]+@[\w\-]+\.[\w.\-]+$/", $email, $result)) {
    echo '正しいメールです。';
    print_r($result);
  } else {
    echo 'メールが不正です';
  }
  echo '<br>';
  
  /*
    ３．HTML
    見出しタグ(h1~h6)の中身のみ取得してみてください。
    -- 対象のHTML
    <!DOCTYPE html>
    <html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <h1>見出し１</h1>   
        <h2>見出し２</h2>   
        <h3>見出し３</h3>   
        <header>ヘッダー</header>
    </body>
    </html>
  */

  $html = '<!DOCTYPE html>
  <html>
  <head>
      <title>Document</title>
  </head>
  <body>
      <h1>見出し１</h1>   
      <h2>見出し２</h2>   
      <h3>見出し３</h3>   
      <header>ヘッダー</header>
  </body>
  </html>';

  // /の部分は特殊記号のため、\をつける。
  if(preg_match_all("/<h[1-6]>(.+)<\/h[1-6]>/", $html, $result)) {
    // print_r($result);
    //末尾だけ取得する。
    print_r($result[count($result) - 1]);
  } 

    

    