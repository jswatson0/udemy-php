<?php
$config['db'] = array(
	'host' => 'localhost',
	'username' => 'root',
	'password' => '',
	'dbname' => 'test'
);

$db = new PDO('mysq:host=' . $config['db']['host'] . ';dbname=' . $config['db']['dbname'], $config['db']['username'], $config['db']['password']);
?>