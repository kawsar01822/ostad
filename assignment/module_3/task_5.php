<?php

// Task 5: Password Generator

function generatePassword($length = 12)
{

    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numericChars = '0123456789';
    $specialChars = '(!@#$%^&*()_+).';

    $allChars = $lowercaseChars . $uppercaseChars . $numericChars . $specialChars;
    $allChars = str_shuffle($allChars);
    $password = '';

    $hasLower = 0;
    $hasUpper = 0;
    $hasNumeric = 0;
    $hasSpecial = 0;
    // Generate random characters for the password
    for ($i = 0; $i < $length; $i++) {
        $randomChar = $allChars[rand(0, strlen($allChars) - 1)];
        $password .= $randomChar;

        $pos = strpos($lowercaseChars,$randomChar);    // check if lowercase
        if($pos !== false){
            $hasLower++;
        }else{
            $pos = stripos($uppercaseChars,$randomChar);
            if($pos !== false){
                $hasUpper++;
            }else{
                $pos = stripos($numericChars,$randomChar);
                if($pos !== false){
                    $hasNumeric++;
                }else{
                    $pos = stripos($specialChars,$randomChar);
                    if($pos !== false){
                        $hasSpecial++;
                    }
                }
            }
        }
    }

    // echo $hasLower.PHP_EOL;
    // echo $hasUpper.PHP_EOL;
    // echo $hasNumeric.PHP_EOL;
    // echo $hasSpecial.PHP_EOL;

    if ($hasLower > 0 && $hasUpper > 0 && $hasNumeric > 0 && $hasSpecial > 0) {
        return $password;
    }else{
        return generatePassword($length);
    }
}

// Generate a password with a length of 12 characters
$password = generatePassword(12);

// Print the generated password
echo "Generated Password:\n$password \n";

