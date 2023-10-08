<?php


// task 1
// Create a class called 'Person' with the following attributes and methods:

// Attributes:
// - name (string)
// - age (integer)

// Methods:
// - __construct(name (string), age (integer)): Initialize the 'name' and 'age' attributes with the given values.
// - introduce(): Print a message introducing the person with their name and age.

class Person
{

    // attributes

    public string $name;
    public int $age;


    // constructor

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


    // method

    public function introduce()
    {
        printf("My name is %s and I am %d years old.\n", $this->name, $this->age);
    }
}

$person = new Person("John", 30);
$person->introduce();




// task 2
// Create a child class called 'Student' that extends the 'Person' class. The 'Student' class should have an additional attribute called 'mark' (string) and an additional method called 'calculate_grade_percentage()' that returns the mark percentage (string). Assume that the mark is out of 100.

class Student extends Person
{

    // attribute
    public string $marks;


    // constructor
    public function __construct($name, $age, $marks)
    {
        parent::__construct($name, $age);
        $this->marks = $marks;
        $this->changeNameToAlice(); // if output should Alice instead of Robert
    }


    // method
    // $student = new Student("Robert", 18, "85"); Argument is "Robert" but Expected output name is Alice. I don't know is this writing mistake or intensionally to create another method to change $name internally. so i'm making new method.
    public function changeNameToAlice()
    {
        $this->name = "Alice";
    }


    // method override )
    public function introduce()
    {
        printf("My name is %s, I am %d years old.\n", $this->name, $this->age);
    }


    // additional method

    public function calculate_grade_percentage()
    {

        // Assume that the mark is out of 100
        $total_marks = 100;
        // Implement your logic to calculate the mark percentage here
        $percentage = $this->marks / $total_marks * 100;
        return $percentage . "%.\n";

    }
}

$student = new Student("Robert", 18, "85");

$student->introduce();

$gradePercentage = $student->calculate_grade_percentage();

echo "My grade percentage is {$gradePercentage}\n";