<?php
/**
 * Copyright (c) holk 2020.
 * by han gao
 * holk@holk.tech
 */

$server = 'localhost:3306';
$username = 'root';
$password = '12345678';
$dbname = 'test';
$charset = 'utf8';

$mysqli = new mysqli($server,$username,$password,$dbname);
if(!$mysqli) {
    echo '连接失败';
    exit;
}

$mysqli->set_charset($charset);
$mysqli->select_db($dbname);

$result = $mysqli->query('select * from test.employee');
$arr = array();

while ($data = $result->fetch_assoc()) {
    array_push($arr,$data);
}
echo json_encode($arr);

$mysqli->close();