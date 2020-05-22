<?php

//冒泡排序
function bubblesort($arr)
{
    for ($i = 0, $j = count($arr); $i < $j; $i++) {
        for ($k = $j - 1; $k > $i; $k--) {
            if ($arr[$k] < $arr[$k - 1]) list($arr[$k - 1], $arr[$k]) = array($arr[$k], $arr[$k - 1]);
        }
    }
    return $arr;
}

$arr = array(1, 4, 14, 3, 56, 23, 435, 2, 234, 2, 33, 23, 123);
print_r(bubblesort($arr));

// 快速排序
function quicksort($arr)
{
    if (($count = count($arr)) <= 1) return $arr;
    $base = $arr[0];
    $left = $right = array();
    for ($i = 1; $i < $count; $i++) {
        if ($arr[$i] <= $base) $left[] = $arr[$i];
        else $right[] = $arr[$i];
    }
    $left = quicksort($left);
    $right = quicksort($right);
    return array_merge($left, array($base), $right);
}

echo join(',', quicksort(array(1, 3, 23, 5, 234, 65, 6)));

// 插入排序
function insertsort($arr)
{
    for ($i = 1, $j = count($arr); $i < $j; $i++) {
        $k = $i;
        while ($k > 0 && $arr[$k - 1] > $arr[$k]) {
            list($arr[$k], $arr[$k - 1]) = array($arr[$k - 1], $arr[$k]);
            $k--;
        }
    }
    return $arr;
}

$array = array(10, 8, 7, 5, 1, 2, 3, 4);
print_r(insertsort($array));


// 选择排序, (非递归)
function selectsort($arr)
{
    for ($i = 0, $j = count($arr); $i <= $j; $i++) {
        $min = $i;
        $temp = $arr[$i];
        for ($k = $i + 1; $k < $j; $k++) {
            if ($temp > $arr[$k]) {
                $min = $k;
                $temp = $arr[$k];
            }
        }
        if ($min != $i) list($arr[$min], $arr[$i]) = array($arr[$i], $arr[$min]);
    }
    return $arr;
}

$arr = array(9, 3, 11, 23, 90, 99, 12, 34, 22, 87, 32);
print_r(selectsort($arr));

// 选择排序(递归实现)
function selectsort2($arr, $start = 0)
{
    if (($count = count($arr)) == $start + 1) return $arr;
    $new = array();
    $min = $arr[$start];
    $min_index = $start;
    for ($i = $start + 1; $i < $count - 1; $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
            $min_index = $i;
        }
    }
    if ($arr[$start] != $min) list($arr[$start], $arr[$min_index]) = array($arr[$min_index], $arr[$start]);
    return selectsort($arr, $start + 1);
}

$arr = array(9, 3, 11, 23, 90, 99, 12, 34, 22, 87, 32);
print_r(selectsort($arr));


// 二分法查找
function binarysearch($arr, $value, $start = 0, $end = NULL)
{
    if ($end == NULL) $end = count($arr) - 1;
    $index = floor(($start + $end) / 2);
    $base = $arr[$index];
    if ($value < $base) return binarysearch($arr, $value, $start, $index - 1);
    else if ($value > $base) return binarysearch($arr, $value, $index + 1, $end);
    else return $index;
}

$arr = array(1, 3, 5, 6, 7, 8, 10, 12, 14, 16, 18, 20);
$value = 8;
echo binarysearch($arr, $value);



