<?php
// 快速排序
function quickSort($arr)
{
    if (($count = count($arr)) <= 1) return $arr;
    $base = $arr[0];//将数组第一个数作为基准
    $left = $right = array();
    for ($i = 1; $i < $count; $i++) {
        if ($arr[$i] <= $base) $left[] = $arr[$i];//比第一个数小的进入left数组
        else $right[] = $arr[$i];//比第一个数大的进入right数组
    }
    $left = quickSort($left);//对left数组进行递归
    $right = quickSort($right);//对right数组进行递归
    return array_merge($left, array($base), $right);
}

echo join(',', quickSort(array(5, 4, 3, 6, 8, 9, 7, 2, 1, 10)));