<?php

$number = 10;
$number2 = '10';

// compare without taking into account data type
if ($number == $number2) {
    echo 'equal';
} else {
    echo 'not equal';
}

// use triple equals to account for data type
if ($number === $number2) {
    echo 'equal';
} else {
    echo 'not equal';
}
