<?php
echo "<h1 style='text-align: center'>hello world!</h1>";

$num = 1;
for ($i = 0; $i < 5; $i++){
    echo "这是{$i}啦啦啦{$num}<br>";
    var_dump($i);
}
$url = 'http://www.test.com/link?param1=1&param2=2&param3=3';
// 解析url，得到参数字符串
$url = parse_url($url);
echo $url["query"];
echo "<br>";
var_dump($url);