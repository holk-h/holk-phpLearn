<?php
/**
 * Copyright (c) holk 2020.
 * by han gao
 * holk@holk.tech
 */

$id = $_POST["id"];
$name = $_POST["name"];
$sex = $_POST["sex"];
$birthday = $_POST["birthday"];
$job = $_POST["job"];
$salary = $_POST["salary"];
$resume = $_POST["resume"];

$mysql1 = mysqli_connect('localhost','root','12345678','test');
$responseData = array();
if (!$mysql1) {
    echo '连接失败';
    exit();
}

$mysql1->set_charset('utf8');
$mysql1->select_db('employee');

$query = "INSERT INTO test.employee (`id`, `name`, `sex`, `birthday`, `job`, `salary`, `resume`) 
VALUES ({$id}, '{$name}', '{$sex}', '{$birthday}', '{$job}',{$salary},'{$resume}')";

if ($mysql1->query($query)){
    $responseData['code'] = 0;
    $responseData['msg'] = "OK!";
}else{
    $responseData['code'] = 1;
    $responseData['msg'] = "fail";
}
echo json_encode($responseData);

$mysql1->close();