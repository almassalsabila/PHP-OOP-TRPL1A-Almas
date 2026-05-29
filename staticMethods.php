<?php
class greeting {
  // static method
  public static function welcome() {
    echo "Hello World!";
  }

  // non-static method
  public function __construct() {
    self::welcome();
  }
}

new greeting();
?>