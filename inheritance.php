<?php
// Parent class
class Flower {
  public $name;
  public $color;

  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  public function intro() {
    echo "The flower is $this->name and the color is $this->color.<br>";
  }
}

// Lily is inherited from Flower
class lily extends Flower {
  public function message() {
    echo "Am I a flower or a berry? ";
  }
}

$lily = new lily("Lily", "White");
$lily->intro();
$lily->message();
?>