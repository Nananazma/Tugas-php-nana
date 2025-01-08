<?php
require_once "Animal.php";

class Frog extends Animal {
    public function __construct($name) {
        parent::__construct($name, 4, "no");
    }
    public function jump() {
        return "hop hop";
    }

    public function describe(): string {
        return parent::describe() . "Jump: " . $this->jump() . "<br>";
    }

}
   
?>