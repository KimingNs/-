<?php

function niuniu_card()
{
    $tmp = $arr = array(
        0 => '♠A', 1 => '♥A', 2 => '♣A', 3 => '♦A',
        4 => '♠2', 5 => '♥2', 6 => '♣2', 7 => '♦2',
        8 => '♠3', 9 => '♥3', 10 => '♣3', 11 => '♦3',
        12 => '♠4', 13 => '♥4', 14 => '♣4', 15 => '♦4',
        16 => '♠5', 17 => '♥5', 18 => '♣5', 19 => '♦5',
        20 => '♠6', 21 => '♥6', 22 => '♣6', 23 => '♦6',
        24 => '♠7', 25 => '♥7', 26 => '♣7', 27 => '♦7',
        28 => '♠8', 29 => '♥8', 30 => '♣8', 31 => '♦8',
        32 => '♠9', 33 => '♥9', 34 => '♣9', 35 => '♦9',
        36 => '♠10', 37 => '♥10', 38 => '♣10', 39 => '♦10',
        40 => '♠J', 41 => '♥J', 42 => '♣J', 43 => '♦J',
        44 => '♠Q', 45 => '♥Q', 46 => '♣Q', 47 => '♦Q',
        48 => '♠K', 49 => '♥K', 50 => '♣K', 51 => '♦K',
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


//    多人模式

    sleep(1);
    $card['user1']['cards'] = array_slice($cards, 0, 5, true);
    ksort($card['user1']['cards']);
    echo '张天明: <br/> ' . implode('  ', $card['user1']['cards']) . '<br /><br/>';

    $card['user2']['cards'] = array_slice($cards, 5, 5, true);
    ksort($card['user2']['cards']);
    echo '王浪:  <br/>' . implode('  ', $card['user2']['cards']) . '<br /><br/>';

    $card['user3']['cards'] = array_slice($cards, 10, 5, true);
    ksort($card['user3']['cards']);
    echo '甘子威:  <br/>' . implode('  ', $card['user3']['cards']) . '<br /><br/>';

    $card['user4']['cards'] = array_slice($cards, 15, 5, true);
    ksort($card['user4']['cards']);
    echo '曾智校:  <br/>' . implode('  ', $card['user4']['cards']) . '<br /><br/>';

    $card['user5']['cards'] = array_slice($cards, 20, 5, true);
    ksort($card['user5']['cards']);
    echo '张子恒:  <br/>' . implode('  ', $card['user5']['cards']) . '<br /><br/>';


    //solo模式
//    for ($i = 1; $i <= 3; $i++) {
//        if ($i == 1) {
//            $card['user1']['cards'] = array_slice($cards, 0, 3, true);
//            $a1 = $card['user1']['cards'];
//            ksort($card['user1']['cards']);
//            echo '张天明: <br/> ' . implode('  ', $card['user1']['cards']) . '<br /><br/>';
//
//            $card['user2']['cards'] = array_slice($cards, 3, 3, true);
//            $b1 = $card['user2']['cards'];
//            ksort($card['user2']['cards']);
//            echo '王浪:  <br/>' . implode('  ', $card['user2']['cards']) . '<br /><br/>';
//
//            echo '第一轮游戏规则：<br/>' . '1.第一轮叫价以牌小优先。牌大小先看牛，无牛则看单牌大小及花色，有牛》无牛，若都有牛则比单牌大小及花色<br/>' .
//                '2.第一轮最多只能叫2倍底钱，先叫者为牌型较小者，后叫者可跟可不跟，跟则下一轮发牌，不跟则结束本局。<br/>';
//
//            echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
//
//            /**
//             * 将上一轮牌型显示出来
//             */
////            echo $a1 . '<br/>';
////            echo $b1 . '<br/>';
//        } else if ($i == 2) {
//            $card['user1']['cards'] = array_slice($cards, 6, 1, true);
//            $a2 = $card['user1']['cards'];
//
//            ksort($card['user1']['cards']);
//            echo '张天明: <br/> ' . implode('  ', $card['user1']['cards']) . '<br /><br/>';
//
//            $card['user2']['cards'] = array_slice($cards, 7, 1, true);
//            $b2 = $card['user2']['cards'];
//            ksort($card['user2']['cards']);
//            echo '王浪:  <br/>' . implode('  ', $card['user2']['cards']) . '<br /><br/>';
//
//            echo '第二轮游戏规则：<br/>' . '1.第二轮最多可以叫3倍底钱，先叫者为第一轮后叫者.<br/>' . '2.后叫者可跟可不跟，跟则下一轮发牌，不跟则结束本局。<br/>' .
//                '3.假如先叫者叫的倍数底钱较小，后叫者可反叫比先叫者倍数高的底钱，那么先叫者须补剩余倍数的底钱，或者不跟，跟则下一轮发牌，不跟则结束本局<br/>';
//            echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
//        } else {
//
//            $card['user1']['cards'] = array_slice($cards, 8, 1, true);
//            $a3 = $card['user1']['cards'];
//            ksort($card['user1']['cards']);
//            echo '张天明: <br/> ' . implode('  ', $card['user1']['cards']) . '<br /><br/>';
//
//            $card['user2']['cards'] = array_slice($cards, 9, 1, true);
//            $b3 = $card['user2']['cards'];
//            ksort($card['user2']['cards']);
//            echo '王浪:  <br/>' . implode('  ', $card['user2']['cards']) . '<br /><br/>';
//
//            echo '<br/>';
//
//        }
//
//    }
//
//    $a = array_merge($a1, $a2, $a3);
//    $b = array_merge($b1, $b2, $b3);
//
//    echo '张天明: <br/>最终牌为： ' . implode('  ', $a) . '<br /><br/>';
//    echo '王浪: <br/>最终牌为： ' . implode('  ', $b) . '<br /><br/>';
//    echo '最终轮游戏规则：<br/>' . '1.牛大者获胜，赢得全部底钱<br/>' . '2.若有倍数牛则输家须给该倍数的底钱<br/><br/>';
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
echo '<br/> . 牛7-9 2倍 . <br/> . 牛牛 3倍 . <br/> . 五花牛 4倍 .<br/>5小牛（5张＜5） 5倍';