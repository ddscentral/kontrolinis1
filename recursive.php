<?php
/**
 * Created by PhpStorm.
 * User: DDS
 * Date: 6/29/2018
 * Time: 6:50 PM
 */

$data = array(
    4,
    5,
    6,
    7,
    8,
    array(
        1,
        2,
        3,
        4,
        array(5, 6, 7, 8, 9, 10),
        array(11, 12, 13, 14, 15)
    ),
    array(100, 200, 300, 400),
    array(500, 600, 700, 800),
    1000,
    111,
    222,
    333
); // 5416

function arraySum($array) {
    $result = 0;

    if (is_array($array)) {
        foreach ($array as $element) {
            $result += arraySum($element);
        }
    } else {
        if (is_int($array)) {
            $result = $array;
        }
    }

    return $result;
}

echo arraySum($data) . "\n";