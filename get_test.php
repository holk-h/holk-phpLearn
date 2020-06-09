<?php
if($_GET){
    $getUserName = $_GET['username'];
    $getAge = $_GET['age'];
    $getSex = $_GET['sex'];
    echo "我是{$getUserName}，今年{$getAge}岁，{$getSex}性。";
}else {
    $getUserName = $_POST['username'];
    $getAge = $_POST['age'];
    $getSex = $_POST['sex'];
    echo "我是{$getUserName}，今年{$getAge}岁，{$getSex}性。";
}

