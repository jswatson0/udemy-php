<?php

$people = array(
    'Billy' => array('age' => 45, 'hair' => 'blonde', 'Food' => array('Pizza', 'Burgers')),
    'Alex' => array('age' => 65, 'hair' => 'red'),
    'Dale' => array('age' => 23, 'hair' => 'brown')
);

print_r($people['Billy']['Food']);

echo $people['Billy']['Food'][1];