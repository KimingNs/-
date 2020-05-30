<?php

function dezhou_card()
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
     * 2.先发n组玩家底牌（2张）
     * 3.再分3轮发公牌，第一轮发3张，后两轮各一张
     */

    foreach ($arr as $k => $v) {
        $index = rand(0, 51 - $k);
        $key = array_search($tmp[$index], $arr);
        $cards[$key] = $tmp[$index];
        unset($tmp[$index]);
        $tmp = array_values($tmp);
    }

    //先发玩家底牌
    $player1 = array_slice($cards,0,2);
    $player2 = array_slice($cards,2,2);
//    $player3 = array_slice($cards,4,2);
//    $player4 = array_slice($cards,6,2);
//    $player5 = array_slice($cards,8,2);
//    $player6 = array_slice($cards,10,2);

    echo '<pre>';
    echo '技术有限，请闭眼';
    echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
    echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';

    echo '第一位玩家底牌为：' . '<br/>';
    print_r( $player1);

    echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
    echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
    echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';

    echo '第二位玩家底牌为：' . '<br/>';
    print_r( $player2);

    echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
    echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
    echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
    for ($i = 1; $i <= 3; $i++) {
        if ($i == 1) {
            $card['user1']['cards'] = array_slice($cards, 4, 3, true);
            $a = $card['user1']['cards'];

            echo '第一轮底牌为: <br/> ' . implode('&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp', $a) . '<br /><br/>';

            echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
            echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
            echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
            /**
             * 将上一轮牌型显示出来
             */
//            echo $a1 . '<br/>';
//            echo $b1 . '<br/>';
        }
        if ($i == 2) {
            $card['user1']['cards'] = array_slice($cards, 7, 1, true);
            $a2 = $card['user1']['cards'];

            $a = array_merge($a,$a2);

            echo '第二轮底牌为: <br/> ' . implode('&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp', $a) . '<br /><br/>';

            echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
            echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
            echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';
        }
        if ($i == 3) {

            $card['user1']['cards'] = array_slice($cards, 8, 1, true);
            $a3 = $card['user1']['cards'];

            $a = array_merge($a,$a3);


            echo '最终牌为: <br/> ' . implode('&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp', $a) . '<br /><br/>';

            echo '<br/>';

        }
    }
}

dezhou_card();