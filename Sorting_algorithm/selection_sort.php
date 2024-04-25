<?php 

$a = [10, 8, 2, 4, 7];

for ($i = 0; $i < count($a) -1; $i++) {
    $position = $i;
    for ($j = $i+1; $j < count($a); $j++) {
        if ($a[$j] < $a[$position]) {
            $position = $j;
        }
    }
    if ($position != $i) {
        $temp = $a[$i];
        $a[$i] = $a[$position];
        $a[$position] = $temp;
    }
    print_r($a);

}
print_r([$a]);exit();