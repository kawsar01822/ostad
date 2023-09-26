<?php

// Task 3: Array Sorting 

$grades = [85, 92, 78, 88, 95];

function sortDesc($number1, $number2)
{
    if ($number1 < $number2) {
        return 1;
    } else if ($number1 > $number2) {
        return -1;
    } else {
        return 0;
    }
}

usort($grades, 'sortDesc');  // callback function

print_r($grades);


// echo PHP_EOL;

// function sortGrades(array $grades){
//     rsort($grades);         // Sorting grades in descending order
//     print_r($grades);
// }

// sortGrades($grades);
