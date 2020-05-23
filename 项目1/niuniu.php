<?php

function niuniu_card()
{
    $tmp = $arr = array(
        0 => '黑桃A', 1 => '红心A', 2 => '梅花A', 3 => '方块A',
        4 => '黑桃2', 5 => '红心2', 6 => '梅花2', 7 => '方块2',
        8 => '黑桃3', 9 => '红心3', 10 => '梅花3', 11 => '方块3',
        12 => '黑桃4', 13 => '红心4', 14 => '梅花4', 15 => '方块4',
        16 => '黑桃5', 17 => '红心5', 18 => '梅花5', 19 => '方块5',
        20 => '黑桃6', 21 => '红心6', 22 => '梅花6', 23 => '方块6',
        24 => '黑桃7', 25 => '红心7', 26 => '梅花7', 27 => '方块7',
        28 => '黑桃8', 29 => '红心8', 30 => '梅花8', 31 => '方块8',
        32 => '黑桃9', 33 => '红心9', 34 => '梅花9', 35 => '方块9',
        36 => '黑桃10', 37 => '红心10', 38 => '梅花10', 39 => '方块10',
        40 => '黑桃J', 41 => '红心J', 42 => '梅花J', 43 => '方块J',
        44 => '黑桃Q', 45 => '红心Q', 46 => '梅花Q', 47 => '方块Q',
        48 => '黑桃K', 49 => '红心K', 50 => '梅花K', 51 => '方块K',
    );
    /**
     * 1.54张牌
     * 2.随机发n组，每组5张
     */

    foreach ($arr as $k => $v) {
        $index = rand(0, 51 - $k);
        $key = array_search($tmp[$index], $arr);
        $cards[$key] = $tmp[$index];
        unset($tmp[$index]);
        $tmp = array_values($tmp);
    }

    //多人模式
//    $card['user1']['cards'] = array_slice($cards, 0, 5, true);
//    ksort($card['user1']['cards']);
//    echo '张天明: <br/> ' . implode('  ', $card['user1']['cards']) . '<br /><br/>';
//
//    $card['user2']['cards'] = array_slice($cards, 6, 5, true);
//    ksort($card['user2']['cards']);
//    echo '张子恒:  <br/>' . implode('  ', $card['user2']['cards']) . '<br /><br/>';
//
//    $card['user3']['cards'] = array_slice($cards, 11, 5, true);
//    ksort($card['user3']['cards']);
//    echo '王琪:  <br/>' . implode('  ', $card['user3']['cards']) . '<br /><br/>';

    //solo模式
    for ($i = 1; $i <= 3; $i++) {
        if ($i == 1) {
            $card['user1']['cards'] = array_slice($cards, 0, 3, true);
            $a1 = $card['user1']['cards'];
            ksort($card['user1']['cards']);
            echo '张天明: <br/> ' . implode('  ', $card['user1']['cards']) . '<br /><br/>';

            $card['user2']['cards'] = array_slice($cards, 3, 3, true);
            $b1 = $card['user2']['cards'];
            ksort($card['user2']['cards']);
            echo '张子恒:  <br/>' . implode('  ', $card['user2']['cards']) . '<br /><br/>';

            echo '第一轮游戏规则：<br/>' . '1.第一轮叫价以牌小优先。牌大小先看牛，无牛则看单牌大小及花色，有牛》无牛，若都有牛则比单牌大小及花色<br/>' .
                '2.第一轮最多只能叫2倍底钱，先叫者为牌型较小者，后叫者可跟可不跟，跟则下一轮发牌，不跟则结束本局。<br/>';

            echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
        } else if ($i == 2) {
            $card['user1']['cards'] = array_slice($cards, 6, 1, true);
            $a2 = $card['user1']['cards'];
            ksort($card['user1']['cards']);
            echo '张天明: <br/> ' . implode('  ', $card['user1']['cards']) . '<br /><br/>';

            $card['user2']['cards'] = array_slice($cards, 7, 1, true);
            $b2 = $card['user2']['cards'];
            ksort($card['user2']['cards']);
            echo '张子恒:  <br/>' . implode('  ', $card['user2']['cards']) . '<br /><br/>';

            echo '第二轮游戏规则：<br/>' . '1.第二轮最多可以叫3倍底钱，先叫者为第一轮后叫者.<br/>' . '2.后叫者可跟可不跟，跟则下一轮发牌，不跟则结束本局。<br/>' .
                '3.假如先叫者叫的倍数底钱较小，后叫者可反叫比先叫者倍数高的底钱，那么先叫者须补剩余倍数的底钱，或者不跟，跟则下一轮发牌，不跟则结束本局<br/>';
            echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
        } else {

            $card['user1']['cards'] = array_slice($cards, 8, 1, true);
            $a3 = $card['user1']['cards'];
            ksort($card['user1']['cards']);
            echo '张天明: <br/> ' . implode('  ', $card['user1']['cards']) . '<br /><br/>';

            $card['user2']['cards'] = array_slice($cards, 9, 1, true);
            $b3 = $card['user2']['cards'];
            ksort($card['user2']['cards']);
            echo '张子恒:  <br/>' . implode('  ', $card['user2']['cards']) . '<br /><br/>';

            echo '<br/>';

        }

    }

    $a = array_merge($a1, $a2, $a3);
    $b = array_merge($b1, $b2, $b3);

    echo '张天明: <br/>最终牌为： ' . implode('  ', $a) . '<br /><br/>';
    echo '张子恒: <br/>最终牌为： ' . implode('  ', $b) . '<br /><br/>';
    echo '最终轮游戏规则：<br/>' . '1.牛大者获胜，赢得全部底钱<br/>' . '2.若有倍数牛则输家须给该倍数的底钱<br/><br/>';
}

/*
 * niuniu_solo
 * 1.先发3张牌
 *      显示3张牌的花色以及牌型，点击下一页进行下一轮发牌
 * 2.再发1张牌
 *      加上上一轮的3张牌，本页共显示4张牌，点击下一页进行下一轮发牌
 * 3.再发1张牌
 *      显示总共的5张牌
 */

niuniu_card();
echo '<br/> . 牛7-9 2倍 . <br/> . 牛牛 3倍 . <br> . 5小牛（5张＜5） 5倍';