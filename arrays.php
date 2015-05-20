<?php

//$people = array('Billy' => 34, 'Alex' => 12, 'Dale' => 49);
//$people['Jason'] = 32;
//
//echo $people['Billy'];
//
//print_r($people);

$GLOBALS['level'] = array(
    1 => array(
        'name' => 'Level 1',
        'desc' => 'This is the first level.'
    ),
    2 => array(
        'name' => 'Level 2',
        'desc' => 'This is the second level.'
    ),
    3 => array(
        'name' => 'Level 3',
        'desc' => 'This is the last level.'
    )
);

function level_data($level, $data) {
    if(array_key_exists($level, $GLOBALS['level']) === true) {
        return $GLOBALS['level'][$level][$data];
    } else {
        return false;
    }
}


//echo level_data(2, 'desc');

//echo $GLOBALS['level'][1]['name'];

echo '<pre>', print_r($GLOBALS, true), '</pre>';
