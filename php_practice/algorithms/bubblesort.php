<?php


function bubbleSort (array $arr):array {
    $n = count($arr);
    #   echo "the length of the $arr is $n";
    //  echo "the length of the $arr is $n";
    for ($i = 0; $i <= $n - 1; $i++) {
        $swapped = false;
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr
        }
    };
    return $arr;
}

$arr = [1, 2, 3, 4, 5, 9999999999, 6];
bubbleSort($arr);
