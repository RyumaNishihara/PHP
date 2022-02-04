<?php 
  //サーバー側にデータを保存する仕組み
  session_start();
  //今いる自分のページのURLを取得
  $self_url = $_SERVER['PHP_SELF'];
?>

<form action="<?php echo $self_url; ?>" method="POST">
  <input type="text" name="title">
  <input type="submit" name="type" value="create">
</form>

<?php 
if(isset($_POST['type'])) {
  //もし、$_POST['type']の値がnull以外だった場合、
  if($_POST['type'] === 'create') {
    //もし、$_POST['type']の値が'create'と等しい場合、
    $_SESSION['todos'][] = $_POST['title'];
    //$_SESSION['todos']の配列に$_POST['title']の値を代入する。
    echo "新しいタスク[{$_POST['title']}]が追加されました。";
  } else if($_POST['type'] === 'update') {
    $_SESSION['todos'][$_POST['id']] = $_POST['title'];
    echo "タスク[{$_POST['title']}]の名前が変更されました。";
  } else if($_POST['type'] === 'delete') {
    //配列の要素を削除
    array_splice($_SESSION['todos'], $_POST['id'], 1);
    echo "タスク[{$_POST['title']}]が削除されました。";
  }
}

if(empty($_SESSION['todos'])) {
  //もし、$_SESSION['todos']の値が空だった場合、
  $_SESSION['todos'] = [];
  //$_SESSION['todos']の値を初期化する。
  echo 'タスクを入力しましょう!';
  die();
  //phpの処理を止める。
}
?>

<ul>
  <?php
    // count()関数は、配列の要素数を数えてくれる。
    for($i = 0; $i < count($_SESSION['todos']); $i++):
      //for文の文末に:をつけて繰り返したいHTML要素を囲んでendforで閉じる。
      //中のHTML要素がループ対象となる。
  ?>
  <li>
    <form action="<?php echo $self_url; ?>" method="POST">
      <!-- delete,updateボタンを押した時、何番目の値が飛んできたかわかる様にする。 -->
      <input type="hidden" name="id" value="<?php echo $i; ?>">
      <input type="text" name="title" value="<?php echo $_SESSION['todos'][$i] ?>">
      <input type="submit" name="type" value="delete">
      <input type="submit" name="type" value="update">
    </form>
  </li>
  <?php endfor; ?>
</ul>