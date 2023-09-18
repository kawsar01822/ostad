<?php

    // print even numbers from given range using for loop with step of 2
    
    function printEvenWithFor($start,$end){
        if($start%2 != 0){
            $start++;
        }

        for($i = $start; $i <= $end; $i+=2){
            echo "$i ";
        }
        echo "\n\n";
    }

    printEvenWithFor(2,20);



    // print even numbers from given range using while loop with step of 2

    function printEvenWithWhile($start,$end){
        if($start%2 != 0){
            $start++;
        }

        $i = $start;
        while($i <= $end){
            echo "$i ";
            $i+=2;
        }
        echo "\n\n";
    }

    printEvenWithWhile(1,20);



    // print even numbers from given range using do while loop with step of 2

    function printEvenWithDoWhile($start,$end){
        if($start%2 != 0){
            $start++;
        }

        $i = $start;
        do{
            echo "$i ";
            $i+=2;
        }while($i <= $end);
        echo "\n\n";
    }

    printEvenWithDoWhile(1,20);

