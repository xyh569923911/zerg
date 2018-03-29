<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/27
 * Time: 16:10
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code=400;
    public $msg='参数错误';
    public $error_code=10000;
}