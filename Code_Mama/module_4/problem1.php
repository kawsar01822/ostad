<?php


// You are given two strings A and B. Your task is check whether the string B is anagram of string A or not. An anagram of a string is another string that contains the same characters, only the order of characters can be different. For example, “abcd” and “dabc” are an anagram of each other whereas "abcd" and "aabc" are not.

// Input:
// The input consists of two strings A and B in two lines containing only lowercase English letters.

// Output:
// In output print "YES" if string B is anagram of string A or "NO" otherwise. Print without quotation mark.


    # Write your PHP code from here

    // fscanf(STDIN,"%s",$str1);
    // fscanf(STDIN,"%s",$str2);

    function areAnagrams($strA, $strB) {
        // Remove spaces and convert to lowercase to make it case-insensitive
        $strA = strtolower(str_replace(' ', '', $strA));
        $strB = strtolower(str_replace(' ', '', $strB));
        
        // Check if the lengths are the same
        if (strlen($strA) !== strlen($strB)) {
            return false;
        }
        
        // Sort the strings and compare them
        $sortedA = str_split($strA);
        $sortedB = str_split($strB);
        
        sort($sortedA);
        sort($sortedB);
        
        return $sortedA === $sortedB;
    }
    
    // Test cases
    $str1 = "abcd";
    $str2 = "dabc";
    
    if (areAnagrams($str1, $str2)) {
        echo "YES";
    } else {
        echo "NO";
    }
?>
