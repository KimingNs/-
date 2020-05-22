<?php
//有一母牛，到4岁可生育，每年一头，所生均是一样的母牛，到15岁绝育，不再能生，20岁死亡，问n年后有多少头牛。

function cow($y)
{
    static $num = 1;//定义静态变量;初始化牛的数量为1
    if ($y >= 0) {
        for ($i = 1; $i <= $y; $i++) {
            if ($i >= 4 && $i < 15) {//每年递增来算，4岁开始+1，15岁不能生育
                $num++;
                cow($y - $i);//递归方法计算小牛$num，小牛生长年数为$y-$i
            } else if ($i == 20) {
                $num--;//20岁死亡减一
            }
//            echo '第' . $i . '年牛的总数为：' . $num . '<br/>';
        }
        return $num;
    } else
        return false;
}

echo cow(13);
/*
 * A
 * A
 * A
 * A+A1
 * A+A1+A2
 * A+A1+A2+A3
 * A+A1+A2+A3+A4
 * A+A1+A2+A3+A4+A5+A11
 * A+A1+A2+A3+A4+A5+A6+A11+A12+A21
 * A+A1+A2+A3+A4+A5+A6+A7+A11+A12+A13+A21+A22+A31
 *
 * */