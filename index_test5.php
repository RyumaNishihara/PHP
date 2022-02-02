<?php 
echo '<br>---クラス---';
echo '---クラスとthis---';
// echo '---クラスとStatic---';
/*
  - クラス
  新しくオブジェクトを作成するための雛形。
  オブジェクトとは、特定の変数を持っていたり特定の関数を保持している構造体(一つのまとまり)のこと。
*/

class Person
{
  //クラス内で変数を定義する場合には、アクセスの範囲を指定するキーワード（public, private）をつける。
  public $name;
  public $age;

  //newを使った際に呼ばれる関数
  function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  function hello() {
    echo 'hello, ' . $this->name . '<br>';
    //returnの$thisは、生成した後のオブジェクトを指し示す。
    return $this;
  }

  function bye() {
    echo 'bye, ' . $this->name . '<br>';
    return $this;
  }
}

$bob = new Person('Bob', 18);
echo $bob->name;
echo $bob->age;

echo '<br>';
//メソッドの呼び出し
$bob->hello();
$bob->bye();

$tim = new Person('Tim', 32);
$tim->hello()->bye();
