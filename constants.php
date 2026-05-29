<?php
class Goodbye {
  const MESSAGE = "Thank you for visiting My Website!";

  public function bye() {
    echo self::MESSAGE; // Access constant
  }
}

$goodbye = new Goodbye();
$goodbye->bye();
?>