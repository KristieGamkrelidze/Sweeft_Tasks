<?php
// Task 1
// This is a function that returns Fibonacci sequence.

function fibonacci($int){
    $int1 = 0; 
    $int2 = 1;
    $int3 = 0;
    $resultArr = [];
    
    array_push($resultArr, $int1);
    array_push($resultArr, $int2);

    while ($int3 < $int){  // keeps looping while $int is less than given int
        $int3 = $int2 + $int1; //the second and first numbers are added to define third number.
        if($int3 <= $int){
        array_push($resultArr, $int3); 
        }
        $int1 = $int2;   
        $int2 = $int3;  
        //there are shifts for the next iteration
    }  
    print_r($resultArr);
}

fibonacci(10);