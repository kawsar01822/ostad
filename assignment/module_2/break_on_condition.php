<?php

                // Break on condition using for loop  //
    function fibonacci($n=10, $breakPoint=100)
    {
        $first = 0; 
        $second = 1;

        for($i=$n;$i>0;$i--){
            if($first>$breakPoint){
                break;
            }
            echo "$first ";
            $temp = $first;
            $first=$second;
            $second=$temp+$second;
        }
        echo "\n\n";
    }

    fibonacci();
    // fibonacci(15);
    // fibonacci(15,200);



                // Break on condition using recursive function  //

    // function fibonacciUsingRecursion($first=0, $second=1, $n=10, $breakPoint=100)
    // {
    //     if($first>=$breakPoint || $n==0){
    //         echo "\n\n";
    //         return;
    //     }
    //     echo "$first ";
    //     fibonacciUsingRecursion($second, $first+$second, --$n,$breakPoint);
    // }

    // fibonacciUsingRecursion();
    // fibonacciUsingRecursion(0,1);
    // fibonacciUsingRecursion(0,1,15,100);