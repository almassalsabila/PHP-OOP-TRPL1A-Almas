<?php
class Flower {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  function __destruct() {
    echo "Name: " . $this->name . ". Color: " . $this->color .".<br>";
  }
}

$rose = new Flower('Rose', 'Red');
$tulip = new Flower('Tulip', 'Yellow');
?>