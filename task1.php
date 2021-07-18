<?php
// task 1
// This is a function that returns Fibonacci sequence.

function fibonacci($int){
    $n = 0;
    $int1 = 0; 
    $int2 = 1;
    $resultArr = [];
    
    array_push($resultArr, $int1);
    array_push($resultArr, $int2);


    while ($n < $int){  // keeps looping while $n is less than given int
        $int3 = $int2 + $int1; //the second and first numbers are added to define third number.
        array_push($resultArr, $int3); 
        $int1 = $int2;   
        $int2 = $int3;  
        //there are shifts for the next iteration
        $n = $n + 1; 
        //increases by one for the next iteration
    }  
    print_r($resultArr);
}

fibonacci(6);