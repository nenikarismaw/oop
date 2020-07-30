<?php
    class Animal {
        public $legs = 2;
        public $cold_blooded = false;

        public function __construct($name){
            $this->name = $name;
        }
        function getName(){
            $this->name;
        }
        function getLegs(){
            $this->legs;
        }
        function getCold_blooded(){
            $this->cold_blooded;
        }
    }
?>
