<?php

$a = [10, 8, 2, 4, 7];

for ($i = 0; $i < count($a) - 1; $i ++) {
    for ($j = 0; $j < count($a) - $i -1; $i++) {
        if ($a[$j+1] < $a[$j]) {
            $temp = $a[$j];
            $a[$j] = $a[$j+1];
            $a[$j+1] = $temp;
        }
        //print_r($a);
    }
    //print_r($a);
}
print_r($a);