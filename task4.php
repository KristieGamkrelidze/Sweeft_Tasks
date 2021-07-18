<?php 

// Task 4
// This is a function that moves all zero containing elements in an array to the end of the array.

function zero($array){
    $arr1 = [];
    $arr2 = [];
    for($i = 0; $i < count($array); $i++){
        if($array[$i] === 0 || $array[$i] % 10 === 0){
            //  if array element contains zero
             array_push($arr1, $array[$i]); 
            //  pushes zero containing elements to a new array.
        }else{
            array_push($arr2, $array[$i]);
            // pushes non-zero containing elements to a new array.
        }
    }
    $result = array_merge($arr2, $arr1); // marges two new arrays
    print_r ($result);
}


 zero([1,20,3,5,6,0,4,5,76,140]);