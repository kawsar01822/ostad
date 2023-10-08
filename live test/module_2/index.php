<?php

// task 1. 
// Create a PHP script using a loop to print all even numbers between 1 and 10.

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }

}

echo "\n\n";



// task 2. 
// Declare a function named 'greet' that takes one parameter, 'name'. The function should print a greeting message with the name passed to it when it is called.

function greet($name)
{
    echo "Hello $name, welcome to the world of PHP programming!";
}

greet("Kawsar");

echo "\n\n";



// task 3. 
// Create a recursive function called 'factorial' in PHP that calculates and returns the factorial of a number.

function factorial($num)
{
    if ($num == 1) {
        return 1;
    } else {
        return $num * factorial($num - 1);
    }
}

echo factorial(5);

echo "\n\n";



// task 4. 
// Write a PHP function named 'fibonacci' that prints the Fibonacci series up to 10 numbers.

function fibonacci($num)
{
    $start = 0;
    $new = 1;
    for ($i = 0; $i < $num; $i++) {
        echo "$start ";
        $temp = $start;
        $start = $new;
        $new = $temp + $start;
    }
}

fibonacci(10);