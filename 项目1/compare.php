<?php

$a = 7;
$b = 5;
$c = 3;

$max = $c > ($a > $b ? $a : $b) ? $c : ($a > $b ? $a : $b);

echo '最大数为：' . $max;