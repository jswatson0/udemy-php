<?php

$num = 1;
$names = array('Alex' => 21, 'Billy' => 34, 'Dale' => 45);

foreach ($names as $key => $value) {
    if ($key != 'Alex') {
        echo $key . ' is ' . $value . '<br>';
    }
}