<?php
// task 5
// This is a function that returns the most frequently repeated element in an array.

function mode($array){
    $countElements = array_count_values($array); 
    // counts how many times an array elements are recurred.
    arsort($countElements); 
    // sorts an array in descending according values of elements.
    $result = key($count); 
    // turns first element of an array, which is the most frequently repeated element of an array.
    
    print_r ($result);
}
mode([0, 1, 6, 1, 1, 1, 9]);
