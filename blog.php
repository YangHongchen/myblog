<?php
define('APP_DEBUG',true);  //开启调试模式
define('APP_NAME',realpath('blog'));  //定义程序所在路径
define('APP_PATH','./code/');  //定义程序所在路径
define('THINK_PATH',realpath('./code/framework/ThinkPHP').DIRECTORY_SEPARATOR);  //定义框架所在路径
define('RUNTIME_PATH',APP_PATH.DIRECTORY_SEPARATOR.'Runtime'.DIRECTORY_SEPARATOR); 
define('DIR_SECURE_FILENAME', 'index.html');   //目录安全文件

require THINK_PATH.'ThinkPHP.php';