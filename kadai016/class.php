<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP課題016</title>
</head>
<body>
  
<p>
<?php
// クラスの定義
 class Food {
  // プロパティの定義
  private $nama;
  private $price;
// コンストラクタの定義
  public function __construct(string $name, int $price){
    $this->name = $name;
    $this->price = $price;
  }
// メソッドの定義
  public function show_price(){
    echo $this->price . "<br>";
  }
 }
 
 // インスタンスの生成
$food = new food('potate', 250);
// プロパティの参照
print_r($food);
echo "<br>";
// クラスの定義
class Animal{
  // プロパティの定義
  private $name;
  private $height;
  private $weight;
// コンストラクタの定義
public function __construct(string $name, int $height, int $weight){
  $this->name = $name;
  $this->height = $height;
  $this->weight = $weight;
}
// メソッドの定義
public function show_height(){
  echo $this->height . "<br>";
}
}
// インスタンスの生成
$animal = new animal('dog', 60, 5000);
print_r($animal);
echo "<br>";
// プロパティの参照
echo $food->show_price();
echo $animal->show_height();
?>






</p>

</body>
</html>