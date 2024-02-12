<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    // クラスを定義する
    class Food
    {
      // プロパティを定義する
      private $name;
      private $price;

      // コンストラクタを定義する
      public function __construct(string $name, int $price)
      {
        $this->name = $name;
        $this->price = $price;
      }

      // メソッドを定義する
      public function set_name(string $name)
      {
        $this->name = $name;
      }
      public function show_name()
      {
        echo $this->name . '<br>';
      }
      public function set_price(string $price)
      {
        $this->price = $price;
      }
      public function show_price()
      {
        echo $this->price . '<br>';
      }
    }

    // インスタンス化する
    $food = new Food('dog', 250);

    print_r($food);
    $food->show_price();
    ?>
  </p>

  <p>
    <?php
    // クラスを定義する
    class Animal
    {
      // プロパティを定義する
      private $name;
      private $height;
      private $weight;

      // コンストラクタを定義する
      public function __construct(string $name, int $height, string $weight)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      // メソッドを定義する
      public function set_name(string $name)
      {
        $this->name = $name;
      }
      public function show_name()
      {
        echo $this->name . '<br>';
      }
      public function set_height(string $height)
      {
        $this->height = $height;
      }
      public function show_height()
      {
        echo $this->height . '<br>';
      }
      public function set_weight(string $weight)
      {
        $this->weight = $weight;
      }
      public function show_weight()
      {
        echo $this->weight . '<br>';
      }
    }

    // インスタンス化する
    $animal = new Animal('dog', 60, '5000');

    // インスタンス$animalの各プロパティの値を出力する
    print_r($animal);
    ?>
  </p>

  <p>
    <?php
    $food->show_price();
    $animal->show_height();
    ?>
  </p>
</body>

</html>