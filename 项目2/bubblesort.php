<?php


function bubbleSort($arr)
{
// 第一层可以理解为从数组中键为0开始循环到最后一个
    for ($i = 0; $i < count($arr); $i++) {
        // 第二层为从$i+1的地方循环到数组最后
        for ($j = $i + 1; $j < count($arr); $j++) {
            // 比较数组中两个相邻值的大小
            if ($arr[$i] > $arr[$j]) {
                $t = $arr[$i]; // 这里临时变量，存贮$i的值
                $arr[$i] = $arr[$j]; // 第一次更换位置
                $arr[$j] = $t; // 完成位置互换
            }
        }
    }
    return $arr;
}

// 定义一个随机的数组
$arr = array(23, 15, 43, 25, 54, 2, 6, 82, 11, 5, 21, 32, 65);
echo '<pre>';
print_r(bubbleSort($arr));