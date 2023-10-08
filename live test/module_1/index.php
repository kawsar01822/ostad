<?php

// task 1
// Declare a variable called $age and assign your age to it.

$age = 28;



// task 2
// Define a constant named PI and assign the value of Pi (3.14159) to it.

define("PI", 3.14159);



// task 3
// Print the following sentence using the echo statement:
// Hello, welcome to the world of PHP programming!

echo "Hello, welcome to the world of PHP programming!";
echo "\n";



// task 4
// Calculate and print the result of the expression: ((20 + 5) * 3) / 4.

echo ((20 + 5) * 3) / 4;
echo "\n";
// echo "\n";
// echo $age;
// echo "\n";
// echo PI;




// taks 5
// Write a conditional statement that checks if a variable $marks is greater than or equal to 60 and less than 80. If the condition is true, print "Passed," otherwise print "Failed."

$marks = 75;

if ($marks >= 60 && $marks < 80) {
    echo "Passed,";
} else {
    echo "Failed.";
}