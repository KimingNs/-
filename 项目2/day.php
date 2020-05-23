<?php

//上个月第一天
function getLastMonthBegin()
{
    $day = date('Y-m-01', strtotime('-1 month'));
    $weekday = date("l", strtotime($day));

    echo $day . $weekday . '<br/>';

}

//上个月最后一天
function getLastMonthFinal()
{
    $day = date('Y-m-t', strtotime('-1 month'));
    $weekday = date("l", strtotime($day));

    echo $day . $weekday . '<br/>';

}

function getNextMonthBegin()
{
    $day = date('Y-m-01', strtotime('1 month'));
    $weekday = date("l", strtotime($day));

    echo $day . $weekday . '<br/>';

}

function getNextMonthFinal()
{
    $day = date('Y-m-t', strtotime('1 month'));
    $weekday = date("l", strtotime($day));

    echo $day . $weekday . '<br/>';

}

getLastMonthBegin();
getLastMonthFinal();
getNextMonthBegin();
getNextMonthFinal();