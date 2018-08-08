<?php
header('content-type:text/html;charset:"utf-8"');
error_reporting(0);

$news=array(
    array('title'=>'马思纯欧豪分手','hot'=>1828609),
    array('title'=>'娱乐圈情侣','hot'=>1469886),
    array('title'=>'每8分钟送一台魅族16','hot'=>904032),
    array('title'=>'#请傅恒尔晴分手#','hot'=>811917),
    array('title'=>'晚安CP 下线','hot'=>798229),
    array('title'=>'重庆科技学院','hot'=>10000),
    array('title'=>'重庆科技学院','hot'=>9999),
);

echo JSON_encode($news);