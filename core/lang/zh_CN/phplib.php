<?php
/*-----------------------------------------------------------------
！！！！警告！！！！
以下为系统文件，请勿修改
-----------------------------------------------------------------*/

//不能非法包含或直接执行
if (!defined('IN_BAIGO')) {
    exit('Access Denied');
}

/*-------------------------类型-------------------------*/
return array(
    'mysqli'    => 'Mysqli 扩展库',
    'gd'        => 'GD 扩展库',
    'mbstring'  => 'mbstring 扩展库',
    'curl'      => 'cURL 扩展库',
);