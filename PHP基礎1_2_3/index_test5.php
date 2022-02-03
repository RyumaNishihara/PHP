<?php 
echo '<br>---クラス---';
echo '---クラスとthis---';
echo '---クラスとStatic---';
/*
  - クラス
  新しくオブジェクトを作成するための雛形。
  オブジェクトとは、特定の変数を持っていたり特定の関数を保持している構造体(一つのまとまり)のこと。

  - staticメソッド（静的メソッド）
  staticの中ではthisが使用できない。
  staticメソッドは、クラス自体に登録するメソッド。
  クラス内で使用する際は、static::名前を使用するのが一般的。
*/

class Person
{
  //クラス内で変数を定義する場合には、アクセスの範囲を指定するキーワード（public, private）をつける。
  public $name;
  public $age;
  //static　プロパティで用いる場合
  public static $whereTolive = 'Earth';
  public const live = 'earth2';

  //newを使った際に呼ばれる関数
  function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  //final メソッドの先頭につけると、継承先のクラスで変更できない様にする。
  final function hello() {
    echo 'hello, ' . $this->name . '<br>';
    //クラス内で使用する際は、static::名前を使用するのが一般的。
    static::hoge();
    echo static::live;
    //returnの$thisは、生成した後のオブジェクトを指し示す。
    return $this;
  }

  function bye() {
    echo 'bye, ' . $this->name . '<br>';
    return $this;
  }

  static function hoge() {
    echo 'hoge';
  }
}
// クラスの継承
class Japanese extends Person
{
  //継承元のメソッドを変更することを、オーバーライトと呼ぶ。
  function bye() {
    echo 'バイバイ, ' . $this->name . '<br>';
    return $this;
  }
}

//Pesonクラスの実行
$bob = new Person('Bob', 18);
echo $bob->name;
echo $bob->age;

echo '<br>';
//メソッドの呼び出し
$bob->hello();
$bob->bye();

$tim = new Person('Tim', 32);
$tim->hello()->bye();

//staticの実行
Person::hoge();
echo '<br>';
echo Person::$whereTolive;

//Japaneseクラスの実行
$taro = new Japanese('太郎', 5);
echo '<br>';
echo $taro->name;
echo '<br>';
$taro->bye();

echo '<br>-------------testスペース--------------<br>';

//abstractを含むクラスには、クラス名にもabstractを記載する。
//abstractをつけたクラスはインスタンス化できない。継承先で呼び出す。
abstract class Test
{
  //protectedは、アクセス範囲を指定するキーワード。自クラス内か継承したクラス内で使える様になる。
  protected $test;

  function __construct($test)
  {
    $this->test = $test;
  }

  function hello() {
    echo 'hello, ' . $this->test . '<br>';
    return $this;
  }

  //abstract 継承先で実装するための明示
  abstract function abs();
}

class Test2 extends Test
{
  function abs() {
    echo 'abs';
  }
}

//Testクラスの実行
// $test = new Test('test');
// $test->hello();

//Test2クラスの実行
$test2 = new Test2('test2');
$test2->abs();
$test2->hello();