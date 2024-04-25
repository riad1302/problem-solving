<?php

function primeNumber($number){
    for ($i = 2; $i < $number; $i++) {
            $isPrime = true;
            for ($j = 2; $j <= sqrt($i); $j++) {
                if ($i % $j == 0) {
                    $isPrime = false;
                    break;
                }
            }
            if($isPrime) {
                $res[] = $i;
            }

    }
    print_r($res);
}

primeNumber(10);

