<?php

// Task 1:
// Write a PHP code to read the content of a text file and display it on the webpage.
// Use the following template: 

$file = '{{file_path}}';
// $file = 'data.txt';
 

// Open the file

$fp = fopen($file, "r");


// Read the content of the file

$data = fread($fp, filesize($file));

// $data = file_get_contents($file);


// Close the file

fclose($fp);


// Display the content

// print_r($data);
echo $data;

// Task 2: .
// Write a PHP code to append new data to an existing text file.
// Use the following template:

$file = '{{file_path}}';
// $file = 'data.txt';

$data = '{{data}}';
// $data = "\nNew data";

 

// Open the file in append mode
$fp = fopen($file, "a");


// Write the data to the file
fwrite($fp, $data);
// file_put_contents($file, $data,FILE_APPEND);


// Close the file
fclose($fp);

?>