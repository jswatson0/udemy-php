<?php

function add() {
    $total = 0;
    foreach(func_get_args() as $arg) {
        $total += (int)$arg;
    };
    return $total;
}

echo add(12, 34, 34, 3444, 38495);


function append($initial) {
    $result = func_get_arg(0);
    foreach(func_get_args() as $key => $value) {
        if($key >= 1) {
            $result .= ' ' . $value;
        }
    }
    return $result;
}

echo append('Jason', 'Watson');