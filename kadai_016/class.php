<?php
// Foodクラスを定義
class Food
{
  // プロパティを定義
  private $name;
  private $price;

  public function __construct(string $name, int $price)
  {
    $this->name = $name;
    $this->price = $price;
  }
  // priceプロパティの値を出力
  public function show_price()
  {
    echo $this->price . '<br>';
  }
}

// インスタンス化
$food = new Food('potato', 250);

// $foodの各プロパティの値を出力
print_r($food);
echo '<br>';

// Animalクラスを定義
class Animal
{
  // プロパティを定義
  private $name;
  private $height;
  private $weight;

  public function __construct(string $name, int $height, int $weight)
  {
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }
  // heightプロパティの値を出力
  public function show_height()
  {
    echo $this->height . '<br>';
  }
}
// インスタンス化
$animal = new Animal('dog', 60, 5000);

// $animalの各プロパティの値を出力
print_r($animal);
echo '<br>';

// $foodのプロパティにアクセスし、値を出力する
$food->show_price();

// $animalのプロパティにアクセスし、値を出力する
$animal->show_height();
