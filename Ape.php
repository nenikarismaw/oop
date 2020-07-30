<?php
    class Ape{
        public $yell = 'Auooo';
        public function __construct($name){
            $this->name = $name;
        }
        public function yell(){
            $this->$yell;
        }
    }
?>