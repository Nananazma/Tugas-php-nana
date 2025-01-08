<?php
    class Animal { 
 public $name;
  public $legs= 4;
  public $cold_Blooded = "no";


  public function __construct($name, $legs = 4, $cold_Blooded = "no") {
    $this->name = $name;
    $this->legs = $legs;
    $this->cold_Blooded = $cold_Blooded;
  }

  public function get_Name() {
    return $this->name;
  }

  public function get_Legs() {
    return $this->legs;
  }

  public function get_Cold_Blooded() {
    return $this->cold_Blooded;
  }

  public function describe(): string {
    return "Name: {$this->name}<br>Legs: {$this->legs}<br>Cold Blooded: {$this->cold_Blooded}<br>";
}
}
     
?>