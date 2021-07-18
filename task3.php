<?php
//Task 3
//This is a function that checks whether there is an arithmetic sequence.

function arithmeticProgression($array){
    $dif = $array[1] - $array[0]; //defines defference between second and first elements of an array.
    for($i = 0; $i < count($array)-1; $i++){
        if(($array[$i + 1] - $array[$i]) != $dif){
            //compares difference between next and current elements of a array to earlier defined difference.
            return "not arithmetic progression";
        }
    }
    return "an arithmetic progression";
}
$arr1 = array(2, 4, 6, 8, 10);
$arr2 = array(2, 7, 18, 25,26);

print_r(arithmeticProgression($arr1));
echo "<br>";
print_r(arithmeticProgression($arr2));