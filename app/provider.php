<?php

use app\ExceptionHandle;
use app\Request;
use app\controller\Cla1;

// 容器Provider定义文件
return [
    'think\Request' => Request::class,
    'think\exception\Handle' => ExceptionHandle::class,
    'Cla1'=> Cla1::class
];
