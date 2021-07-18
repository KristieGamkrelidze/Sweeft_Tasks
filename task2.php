<?php 

// Task2
//This is a function that reverses an intenger.
function rev($int){
    $rev = strrev($int); // Reverses string
    $toInt = intval($rev); // Parses string to int
    return $toInt;
}

 echo rev(12345);