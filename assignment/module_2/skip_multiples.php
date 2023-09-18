<?php

    function skipMultiples($start,$end){
        for($i=$start;$i<=$end;$i++){
            if($i%5==0){
                continue;
            }
            echo "$i ";
        }
    }

    skipMultiples(1,50);