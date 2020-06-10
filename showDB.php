<?php
/**
 * Copyright (c) holk 2020.
 * by han gao
 * holk@holk.tech
 */

/*$server = 'localhost:3306';
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

echo "<table border='1'>";
echo "<tr><th>id</th><th>名字</th><th>性别</th>
<th>生日</th><th>职业</th><th>备注</th></tr>";

while ($data = $result->fetch_assoc()){
    echo "<tr><td>{$data['id']}</td><td>{$data['sex']}</td><td>{$data['birthday']}</td><td>{$data['job']}</td>
<td>{$data['salary']}</td><td>{$data['resume']}</td></tr>";
};
echo "</table>";
$mysqli->close();*/