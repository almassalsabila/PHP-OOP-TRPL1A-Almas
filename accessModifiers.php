<?php
class Flower {
  public $name;

  public function get_details() {
    echo "Name: " . $this->name . ".";
  }
}

$rose = new Flower();
$rose->name = "Rose"; // Can be accessed directly
$rose->get_details();
?>