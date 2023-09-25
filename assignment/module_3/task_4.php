<?php

// Task 4: Multidimensional Array

$studentGrades = [
    "Rahim" =>  ["Math" => 85, "English" => 92, "Science" => 78],
    "Karim" =>  ["Math" => 88, "English" => 95, "Science" => 98],
    "Kamal" =>  ["Math" => 95, "English" => 75, "Science" => 98]
];

function calculateAverageGrades($studentsArray)
{
    foreach ($studentsArray as $student => $grades) {
        $average = array_sum($grades) / count($grades);
        printf("%s's average grade is %.2f\n", $student, $average);
    }
}

// Call the function with the studentGrades array
calculateAverageGrades($studentGrades);
