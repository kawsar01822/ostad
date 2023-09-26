<?php

// Task 4: Multidimensional Array

$studentGrades = [
    "Rahim" =>  ["Math" => 45, "English" => 42, "Science" => 78],
    "Karim" =>  ["Math" => 88, "English" => 95, "Science" => 98],
    "Kamal" =>  ["Math" => 15, "English" => 25, "Science" => 43]
];

function calculateAverageGrades($studentsArray)
{
    foreach ($studentsArray as $student => $grades) {
        $average = round(array_sum($grades) / count($grades));
        $grade = null;
        
        if($average>=80){
            $grade = "A+";
        }
        else if($average>=70){
            $grade = "A";
        }
        else if($average>=60){
            $grade = "A-";
        }
        else if($average>=50){
            $grade = "B";
        }
        else if($average>=40){
            $grade = "C";
        }
        else if($average>=33){
            $grade = "D";
        }
        else{
            $grade = "F";
        }

        printf("%s's average grade is %s\n", $student, $grade);
    }
}

// Call the function with the studentGrades array
calculateAverageGrades($studentGrades);
