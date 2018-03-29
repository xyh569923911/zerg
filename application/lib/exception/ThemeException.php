<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/9
 * Time: 17:13
 */

namespace app\lib\exception;


class ThemeException extends BaseException
{
    public $code=404;
    public $msg='指定的主题不存在，请检查id';
    public $error_code=30000;
}