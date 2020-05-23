<?php

function bubbleSort($arr)
{
    for ($i = 0, $j = count($arr); $i < $j; $i++) {
        for ($k = $j - 1; $k > $i; $k++) {
            if ($arr[$k] < $arr[$k - 1]) {
                $t = $arr[$k];
                $arr[$k] = $arr[$k - 1];
                $arr[$k - 1] = $t;
            }
        }
    }

    return $arr;
}

$arr = array(3, 2, 2, 4, 1, 5, 6, 9, 8, 7, 10);
echo '<pre>';
print_r(bubbleSort($arr));