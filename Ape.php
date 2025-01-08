<?php
require_once "Animal.php";

class Ape extends Animal { 
 
    public function __construct($name) {
        parent::__construct($name, 2, "no");
    }

        public function yell(): string {
            return "Auooo";
        }
    
    
        public function describe(): string {
            return parent::describe() . "Yell: " . $this->yell() . "<br>";
        }
    }
    




?>