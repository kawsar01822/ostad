<?php

// Task 1:
// Create an associative array called $student with the following key-value pairs:
// 'name' => 'Alice', 'age' => 22, 'grade' => 'A'
// Print the age of the student.

print_r("Task 1:" . PHP_EOL);
$student = [
    'name' => 'Alice',
    'age' => 22,
    'grade' => 'A'
];

printf("Age of the student is %d", $student['age']);

echo PHP_EOL;
echo PHP_EOL;




// Task 2:
// Create an associative array called $student with the key-value pairs:
// 'name' => 'Alice', 'age' => 22, 'grade' => 'A'
// Check if the 'grade' key exists in the array using array_key_exists() and print the result.

print_r("Task 2:" . PHP_EOL);
$student = [
    'name' => 'Alice',
    'age' => 22,
    'grade' => 'A'
];

$val = 'grade';
if (array_key_exists($val, $student)) {
    print_r("$val exist is student array");
} else {
    print_r("$val does not exist in student array");
}

echo PHP_EOL;
echo PHP_EOL;




// Task 3:
// Create an array called $numbers with values 100, 200, 50, 40, 50.
// Use a foreach loop to print each value in the array.

print_r("Task 3:" . PHP_EOL);
$numbers = [100, 200, 50, 40, 50];
foreach ($numbers as $num) {
    echo $num;
    echo PHP_EOL;
}




// Task 4:
// Create an array called $names with values 'Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', ‘Moni’.
// Use the array_filter() function to filter names that start with the letter 'M'.
// Print the filtered names.

print_r("Task 4:" . PHP_EOL);
$names = ['Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni'];

function nameFinder($name)
{
    if ($name[0] == 'M') {
        return $name;
    }
    return false;
}

$name = array_filter($names, 'nameFinder');
print_r($name);




// Task 5:
// Create a string variable $originalString with the value 'Hello, World!'.
// Use the strrev() function to reverse the string.
// Print the reversed string.

print_r("Task 5:" . PHP_EOL);
$originalString = "Hello, World!";
print_r(strrev($originalString));