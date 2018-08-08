<?php
header('content-type:text/html;charset:"utf-8"');
error_reporting(0);

$arr1=array('leo','momo','zhangsan');
$arr2=array('username'=>'kevin','age'=>20);

echo json_encode($arr1);