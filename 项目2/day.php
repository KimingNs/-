<?php

//上个月第一天
function getLastMonthBegin()
{
    echo date('Y-m-01', strtotime('-1 month')) . '<br/>';

}

//上个月最后一天
function getLastMonthFinal()
{
    echo date('Y-m-t', strtotime('-1 month')) . '<br/>';
}

getLastMonthBegin();
getLastMonthFinal();