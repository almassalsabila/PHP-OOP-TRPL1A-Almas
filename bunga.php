<?php
class Flower {
  public $name;
  public $color;

  function set_details($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  function get_details() {
    echo "Name: " . $this->name . ". Color: " . $this->color .".<br>";
  }
}
// Create an object named $rose from the Flower class
$rose = new Flower();
$rose->set_details('Rose', 'Red'); // Set property values
$rose->get_details(); // Get output

// Create an object named $tulip from the Flower class
$tulip = new Flower();
$tulip->set_details('Tulip', 'Yellow'); // Set property values
$tulip->get_details(); // Get output
?>