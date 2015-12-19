<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/18
 * Time: 10:50
 */
//获取当前地址的绝对路径:返回的路径最后不带/,如：/usr/local/test
dirname(realpath(__FILE__));//说明：当在 Unix 平台上规定路径时，正斜杠 (/) 用作目录分隔符。而在 Windows 平台上，正斜杠 (/) 和反斜杠 (\) 均可使用。

//获取页面请求的refer
$_SERVER['HTTP_REFERER'];