<?php

// Task 2: Array Manipulation

$numbers = range(1, 10);

function removeEven($n)
{
    return $n % 2 != 0;
}

// function isEven($n)
// {
//     return $n % 2 == 0;
// }

$result = array_filter($numbers, 'removeEven'); // 1, 3, 5, 7, 9

print_r($result);
