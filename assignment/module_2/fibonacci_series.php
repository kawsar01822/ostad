<?php

    function fibonacci_series($n){
        $start = 0;
        $second = 1;
        for($i=0;$i<$n;$i++){
            echo "$start ";
            $temp = $start;
            $start = $second;
            $second = $temp+$second;
        }
    }

    fibonacci_series(15);