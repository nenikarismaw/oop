<?php
require 'animal.php';
require 'Frog.php';
require 'Ape.php';
    $sheep = new Animal("shaun");
    $kodok = new Frog("buduk");
    $sungokong = new Ape("kera sakti");


    echo $sheep->name; // "shaun"
    echo "<br>";
    echo $sheep->legs; // 2
    echo "<br>";
    echo $sheep->cold_blooded; // false
    echo "<br>";
    echo $kodok->name."<br>";
    echo $kodok->kaki."<br>";
    echo $kodok->jump."<br><br>"; // "hop hop"
    echo $sungokong->name."<br>";
    echo $sungokong->yell."<br>"; // "Auooo"

?>